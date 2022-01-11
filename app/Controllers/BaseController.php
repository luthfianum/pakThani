<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
        // Untuk akses menggunakan model
        $this->request                  = \Config\Services::request();
        $this->db                       = \Config\Database::connect();
        
        $this->AddressesModel           = new \App\Models\AddressesModel();
        $this->CartDetailsModel         = new \App\Models\CartDetailsModel();
        $this->CartsModel               = new \App\Models\CartsModel();
        $this->CategoriesModel          = new \App\Models\CategoriesModel();
        $this->ItemsModel               = new \App\Models\ItemsModel();
        $this->SlidesModel              = new \App\Models\SlidesModel();
        $this->TransactionsModel        = new \App\Models\TransactionsModel();
        $this->TransactionStatusModel   = new \App\Models\TransactionStatusModel();
        $this->UserModel                = new \App\Models\UserModel();
        $this->VariantsItemModel        = new \App\Models\VariantsItemModel();
    }
}
