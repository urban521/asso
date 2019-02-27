<?php
namespace App\Controller;

use App\Controller\DefaultController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;






class DefaultController extends Controller
{
    /**
     * @Route("/"), name="Homepage"
     * 
     * il n'y a aucune condition d'accès à cette page
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you nedd
        return $this->render('homepage.html.twig');
    }

    /**
     * @Route("/admin/", name="admin_page")
     */
    public function adminPageAction()
    {
        return $this->render('admin.html.twig');
    }

    /**
     * @Route("/client/", name="client_page")
     */
    public function clientPageAction()
    {
        return $this->render('client.html.twig');
    }

    /**
     * @Route("/login_ok", name="login_ok")
     * 
     * @Security("has_role('ROLE_USER')")
     */
    public function showInfoUserAction()
    {
        return $this->render('login_success.html.twig');
    }

    /**
     * @Route("/user", name="user_info")
     * 
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function showUserAction()
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
            return $this->render('admin.html.twig');
        }

        if($this->get('security.authorization_checker')->isGranted('ROLE_USER')){
            return $this->render('client.html.twig');
        }
    }


    /**
     * @Route("/who-is-user", name="user_question")
     * 
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function determineUser()
    {
        return $this->render('user.html.twig');
    }
}
