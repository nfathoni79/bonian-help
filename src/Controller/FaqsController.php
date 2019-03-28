<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Utility\Text;

/**
 * Faqs Controller
 *
 * @property \App\Model\Table\FaqsTable $Faqs
 * @property \App\Model\Table\FaqCategoriesTable $FaqCategories
 *
 * @method \App\Model\Entity\Faq[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FaqsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Faqs');
        $this->loadModel('FaqCategories');
    }

    public function index()
    {
        $categories  = $this->FaqCategories->find('all')->order(['FaqCategories.id' => 'ASC']);
        $this->set(compact('categories'));
    }


    public function view($id = null)
    {
        $faqs  = $this->Faqs->find('all')
            ->contain([
                'FaqCategories'
            ])
            ->where(['Faqs.faq_category_id' => $id])
            ->order(['Faqs.id' => 'ASC'])->toArray();
        $categories  = $this->FaqCategories->find('all')->order(['FaqCategories.id' => 'ASC']);
        $this->set(compact('faqs','categories'));
    }

}
