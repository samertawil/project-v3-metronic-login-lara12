<?php

namespace App\Services\MyApp;

use App\Models\Contact;
use Illuminate\Pagination\LengthAwarePaginator;

class ContactsServicesRepository
{

    public function __construct()
    {
       //
    }

    public function getContactData(string $search='', int $perPage=10): LengthAwarePaginator
    {
        return Contact::SearchName($search)
            ->paginate($perPage);
    }
}
