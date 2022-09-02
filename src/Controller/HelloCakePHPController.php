<?php
declare(strict_types=1);

namespace App\Controller;

// use App\Controller\AppController;

/**
 * CartManager component
 *
 * @method \App\Controller\AppController getController()
 * @property \Visualize\Controller\AppController $Controller
 * @property \Visualize\Model\Table\CartsTable $Carts
 */

class HelloCakePHPController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function hello()
    {
        if ($this->request->is('post')) {
            $name = $this->request->data('name');
            if (strlen($name) != 0) {
                $this->set('display_name', $name);
            }
        }
    }
}
