namespace App\Services;

class DiceRoller
{
    public static function roll(int $count, int $sides): int
    {
        $total = 0;

        for ($i = 0; $i < $count; $i++) {
            $total += random_int(1, $sides);
        }

        return $total;
    }
}