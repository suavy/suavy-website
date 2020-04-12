<?php

    function readableStartAndEndDates($startDate, $endDate)
    {
        $readableTime = readableTimeBetweenTwoDates($startDate, $endDate);
        if ($startDate && $endDate) {
            return trans('datetime.readable_start_and_end_dates', ['date_start' => $startDate->format('m/Y'), 'date_end' => $endDate->format('m/Y'), 'readable_time' => $readableTime]);
        }
        if ($startDate) {
            return trans('datetime.readable_start_date', ['date' => $startDate->format('m/Y'), 'readable_time' => $readableTime]);
        }
    }

    function readableTimeBetweenTwoDates($starDate, $endDate = null)
    {
        if ($endDate == null) {
            $endDate = \Carbon\Carbon::now();
        }
        $diff = $starDate->diff($endDate);
        $readableDiff = '';
        if ($diff->y) {
            $readableDiff .= trans_choice('datetime.year', $diff->y, ['value' => $diff->y]);
        }
        if ($diff->y && $diff->m) {
            $readableDiff .= trans('datetime.year_month_separator');
        }
        if ($diff->m) {
            $readableDiff .= trans_choice('datetime.month', $diff->m, ['value' => $diff->m]);
        }

        return $readableDiff;
    }
