<?php

declare(strict_types=1);

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Localization;

/**
 * @group localization
 */
class OsTest extends LocalizationTestCase
{
    public const LOCALE = 'os'; // Ossetian

    public const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Tomorrow at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Сабат at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Хуыцаубон at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Къуырисæр at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Дыццæг at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Æртыццæг at 12:00 AM',
        // Carbon::parse('2018-01-05 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-05 00:00:00'))
        'Цыппæрæм at 12:00 AM',
        // Carbon::parse('2018-01-06 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-06 00:00:00'))
        'Майрæмбон at 12:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Дыццæг at 12:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Æртыццæг at 12:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Цыппæрæм at 12:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Майрæмбон at 12:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Сабат at 12:00 AM',
        // Carbon::now()->subDays(2)->calendar()
        'Last Хуыцаубон at 8:49 PM',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Yesterday at 10:00 PM',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'Today at 10:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Today at 2:00 AM',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'Tomorrow at 1:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Дыццæг at 12:00 AM',
        // Carbon::parse('2018-01-08 00:00:00')->subDay()->calendar(Carbon::parse('2018-01-08 00:00:00'))
        'Yesterday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Yesterday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Дыццæг at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Къуырисæр at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Хуыцаубон at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Сабат at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Майрæмбон at 12:00 AM',
        // Carbon::parse('2018-01-03 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-03 00:00:00'))
        'Last Цыппæрæм at 12:00 AM',
        // Carbon::parse('2018-01-02 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-02 00:00:00'))
        'Last Æртыццæг at 12:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Last Майрæмбон at 12:00 AM',
        // Carbon::parse('2018-01-01 00:00:00')->isoFormat('Qo Mo Do Wo wo')
        '1st 1st 1st 1st 1st',
        // Carbon::parse('2018-01-02 00:00:00')->isoFormat('Do wo')
        '2nd 1st',
        // Carbon::parse('2018-01-03 00:00:00')->isoFormat('Do wo')
        '3rd 1st',
        // Carbon::parse('2018-01-04 00:00:00')->isoFormat('Do wo')
        '4th 1st',
        // Carbon::parse('2018-01-05 00:00:00')->isoFormat('Do wo')
        '5th 1st',
        // Carbon::parse('2018-01-06 00:00:00')->isoFormat('Do wo')
        '6th 1st',
        // Carbon::parse('2018-01-07 00:00:00')->isoFormat('Do wo')
        '7th 1st',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        '11th 2nd',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        '40th',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        '41st',
        // Carbon::parse('2018-04-10 00:00:00')->isoFormat('DDDo')
        '100th',
        // Carbon::parse('2018-02-10 00:00:00', 'Europe/Paris')->isoFormat('h:mm a z')
        '12:00 am CET',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 AM, 12:00 am',
        // Carbon::parse('2018-02-10 01:30:00')->isoFormat('h:mm A, h:mm a')
        '1:30 AM, 1:30 am',
        // Carbon::parse('2018-02-10 02:00:00')->isoFormat('h:mm A, h:mm a')
        '2:00 AM, 2:00 am',
        // Carbon::parse('2018-02-10 06:00:00')->isoFormat('h:mm A, h:mm a')
        '6:00 AM, 6:00 am',
        // Carbon::parse('2018-02-10 10:00:00')->isoFormat('h:mm A, h:mm a')
        '10:00 AM, 10:00 am',
        // Carbon::parse('2018-02-10 12:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 PM, 12:00 pm',
        // Carbon::parse('2018-02-10 17:00:00')->isoFormat('h:mm A, h:mm a')
        '5:00 PM, 5:00 pm',
        // Carbon::parse('2018-02-10 21:30:00')->isoFormat('h:mm A, h:mm a')
        '9:30 PM, 9:30 pm',
        // Carbon::parse('2018-02-10 23:00:00')->isoFormat('h:mm A, h:mm a')
        '11:00 PM, 11:00 pm',
        // Carbon::parse('2018-01-01 00:00:00')->ordinal('hour')
        '0th',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        '1 æндæр ago',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        '1 æндæр ago',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        '2 æндæр ago',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        '2 æндæр ago',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        '1 гыццыл ago',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        '1 гыццыл ago',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        '2 гыццыл ago',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        '2 гыццыл ago',
        // Carbon::now()->subHours(1)->diffForHumans()
        '1 сахат ago',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        '1 сахат ago',
        // Carbon::now()->subHours(2)->diffForHumans()
        '2 сахат ago',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        '2 сахат ago',
        // Carbon::now()->subDays(1)->diffForHumans()
        '1 бон ago',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        '1 бон ago',
        // Carbon::now()->subDays(2)->diffForHumans()
        '2 бон ago',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        '2 бон ago',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        '1 къуыри ago',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        '1 къуыри ago',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        '2 къуыри ago',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        '2 къуыри ago',
        // Carbon::now()->subMonths(1)->diffForHumans()
        '1 мӕй ago',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        '1 мӕй ago',
        // Carbon::now()->subMonths(2)->diffForHumans()
        '2 мӕй ago',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        '2 мӕй ago',
        // Carbon::now()->subYears(1)->diffForHumans()
        '1 аз ago',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        '1 аз ago',
        // Carbon::now()->subYears(2)->diffForHumans()
        '2 аз ago',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        '2 аз ago',
        // Carbon::now()->addSecond()->diffForHumans()
        '1 æндæр from now',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        '1 æндæр from now',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        '1 æндæр after',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        '1 æндæр after',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        '1 æндæр before',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        '1 æндæр before',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        '1 æндæр',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        '1 æндæр',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 æндæр',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2 æндæр',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        '1 æндæр from now',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        '1 гыццыл 1 æндæр',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2 аз 3 мӕй 1 бон 1 æндæр',
        // Carbon::now()->addYears(3)->diffForHumans(null, null, false, 4)
        '3 аз from now',
        // Carbon::now()->subMonths(5)->diffForHumans(null, null, true, 4)
        '5 мӕй ago',
        // Carbon::now()->subYears(2)->subMonths(3)->subDay()->subSecond()->diffForHumans(null, null, true, 4)
        '2 аз 3 мӕй 1 бон 1 æндæр ago',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        '1 къуыри 10 сахат',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 къуыри 6 бон',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 къуыри 6 бон',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(["join" => true, "parts" => 2])
        '1 къуыри and 6 бон from now',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 къуыри 1 сахат',
        // Carbon::now()->addHour()->diffForHumans(["aUnit" => true])
        '1 сахат from now',
        // CarbonInterval::days(2)->forHumans()
        '2 бон',
        // CarbonInterval::create('P1DT3H')->forHumans(true)
        '1 бон 3 сахат',
    ];
}
