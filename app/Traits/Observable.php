<?php

namespace App\Traits;

trait Observable
{
    public static function bootObservable(): void
    {
        $observer = '\\App\\Observers\\' . class_basename(get_called_class()) . 'Observer';

        try {
            (new static)->registerObserver($observer);
        } catch (ObserverException $e) {
            Log::alert($e->getMessage());
        } catch (Exception $e) {
            // Handle any other exceptions
            throw new ObserverException('Failed to register observer: ' . $e->getMessage(), 0, $e);
        }

    }
}
