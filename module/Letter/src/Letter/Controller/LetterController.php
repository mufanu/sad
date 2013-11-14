<?php

namespace Letter\Controller;

use Letter\Entity\InLetter;
use Letter\Form\LetterForm;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Stdlib\Hydrator\Reflection;

class LetterController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }

    public function addAction()
    {
        $form = new LetterForm();
        $form->setHydrator(new Reflection());
        $form->bind(new InLetter());

        $request = $this->getRequest();

        if ($request->isPost()) {

            $form->setData($request->getPost());

            if ($form->isValid()) {
                $objectManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

                $mail = $form->getData();
                //$mail->setCreated(time());
                //$mail->setUserId(0);

                $objectManager->persist($mail);
                $objectManager->flush();

                // Redirect to list of projects
                return $this->redirect()->toRoute('letter');

                print '<pre>';
                var_dump($mail);
                print '</pre>';

            }
            else {
                echo "error";
            }

        } else {
            return array('form' => $form);
        }
    }


}

