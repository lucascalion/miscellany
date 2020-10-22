<?php

namespace App\Observers;

use App\Models\MiscModel;
use App\Models\Race;

class RaceObserver extends MiscObserver
{
    /**
     * @param Race $model
     */
    public function deleting(MiscModel $model)
    {
        /**
         * We need to do this ourselves and not let mysql to it (set null), because the plugin wants to delete
         * all descendants when deleting the parent, which is stupid.
         * @var Race $sub
         */
        foreach ($model->races as $sub) {
            $sub->race_id = null;
            $sub->save();
        }

        // We need to refresh our foreign relations to avoid deleting our children nodes again
        $model->refresh();
    }
}
