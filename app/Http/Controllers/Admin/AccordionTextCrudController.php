<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AccordionTextRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AccordionTextCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AccordionTextCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\AccordionText::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/accordion-text');
        CRUD::setEntityNameStrings('accordion text', __('accordion texts'));
        $this->crud->denyAccess('show');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.
        $this->crud->setColumnDetails('text', ['value' => '[html]']);

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(AccordionTextRequest::class);
        CRUD::setFromDb(); // set fields from db columns.

        CRUD::field([
            'name' => 'rank',
            'type' => 'number',
            'default' => 500,
        ]);

        CRUD::field([
            'name' => 'activity',
            'type' => 'boolean',
            'default' => true,
        ]);

        CRUD::field([
            'name' => 'title',
            'type' => 'text',
        ]);

        CRUD::field([
            'name' => 'text',
            'type' => 'custom_tinymce',
            'escape' => false,
        ]);

        foreach (CRUD::fields() as $key => $value) {
            CRUD::field($key)->label(__($key));
        }
        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
