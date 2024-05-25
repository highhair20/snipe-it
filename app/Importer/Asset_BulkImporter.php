<?php

namespace App\Importer;

class Asset_BulkImporter extends AssetImporter
{

    public function __construct($filename)
    {
        \Log::error('Asset_BulkImporter constructor blah');
        parent::__construct($filename);
    }

    protected function handle($row)
    {
        // loop through each record and call parent for each 'quantity'
        \Log::error(print_r($row, true));
        $item_quantity = $this->findCsvMatch($row, 'quantity');
        \Log::error('item quantity: ' . $item_quantity);
        if ($item_quantity) {
            $item_quantity = (int)$item_quantity;
            for ($i = 0; $i < $item_quantity; $i++) {
                \Log::error('Creating ' . $this->findCsvMatch($row, 'asset name') . ' - ' . $this->findCsvMatch($row, 'asset notes'));
                parent::handle($row);
            }
        }
    }
}