<?php

function now() {
    return \Carbon\Carbon::now();
}

function media($file) {
    return url('media/'.$file);
}

function assetToString($file) {
    return Storage::disk('resources')->get('assets/'.$file);
}

function trans_exists($key) {
    if(trans($key) == $key) {
        return false;
    }

    return true;
}

function dispatchNow($job) {
    return app(\Illuminate\Contracts\Bus\Dispatcher::class)->dispatchNow($job);
}

function validateDateFormat($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}