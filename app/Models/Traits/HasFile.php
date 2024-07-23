<?php

namespace App\Models\Traits;

trait HasFile {
    public function sizeForHumans(int $bytes): string {
        $kiloBytes = $bytes / 1024;

        $result = sprintf("%.2f KB", $kiloBytes);
        if (($megaBytes = $kiloBytes / 1024) > 1) {
            $result = sprintf("%.2f MB", $megaBytes);
            if(($kiloBytes = $megaBytes / 1024) > 1) {
                $result = sprintf("%.2f GB", $kiloBytes);
            }
        }

        return $result;
    }
}
