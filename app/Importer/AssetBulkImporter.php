<?php

namespace App\Importer;

class AssetBulkImporter extends AssetImporter
{

    public function __construct($filename)
    {
        parent::__construct($filename);
    }

    protected function handle($row)
    {
        // loop through each record and call parent for each 'quantity'
        $item_quantity = $this->findCsvMatch($row, 'quantity');
        if ($item_quantity) {
            $item_quantity = int($item_quantity);
            for ($i = 0; $i < $item_quantity; $i++) {
                parent::handle($row);
            }
        }
    }
}