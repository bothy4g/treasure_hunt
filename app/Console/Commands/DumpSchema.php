<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;

#[Signature('schema:dump-json')]
#[Description('Dump DB schema structure to JSON for AI reference')]
class DumpSchema extends Command
{
    protected $signature = 'schema:dump-json';

    protected $description = 'Dump DB schema structure to JSON for AI reference';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tables = Schema::getTables();
        $schema = [];

        foreach ($tables as $table) {
            $tableName = $table['name'];
            $columns = Schema::getColumns($tableName);
            $foreignKeys = Schema::getForeignKeys($tableName);
            $indexes = Schema::getIndexes($tableName);

            $schema[$tableName] = [
                'columns' => array_map(fn ($c) => [
                    'name' => $c['name'],
                    'type' => $c['type'],
                    'nullable' => $c['nullable'],
                    'default' => $c['default'],
                ], $columns),
                'foreign_keys' => array_map(fn ($fk) => [
                    'columns' => $fk['columns'],
                    'foreign_table' => $fk['foreign_table'],
                    'foreign_columns' => $fk['foreign_columns'],
                ], $foreignKeys),
                'indexes' => array_map(fn ($i) => [
                    'name' => $i['name'],
                    'columns' => $i['columns'],
                    'unique' => $i['unique'],
                ], $indexes),
            ];
        }

        file_put_contents(
            base_path('docs/db-schema.json'),
            json_encode($schema, JSON_PRETTY_PRINT)
        );

        $this->info('Schema dumped to docs/db-schema.json');
    }
}
