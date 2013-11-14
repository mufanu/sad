<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 14.11.13
 * Time: 14:05
 */

namespace Letter\Form;

use Zend\Form\Form;
use Zend\Form\Element;

class LetterForm extends Form
{
    public function __construct($name = null, $options = array())
    {
        parent::__construct($name, $options);
        //$this->setAttribute('action', 'edit');
        $this->addElements();
    }

    public function addElements() {

        $reg_number = new Element\Text('reg_number');
        $reg_number->setLabel('Входящий №:');

        $in_date = new Element\Text('in_date');
        $in_date->setLabel('От:');

        $pages_number = new Element\Text('pages_number');
        $pages_number->setLabel('Количество листов с приложениями:');

        $type = new Element\Select('type');
        $type->setLabel('Наименование вида документа:')
            ->setValueOptions(array(
                '0' => 'Запрос',
                '1' => 'Информация',
                '2' => 'Согласование',
                '3' => 'Письмо',
            ));

        $outgoing_date = new Element\Date('out_date');
        $outgoing_date->setLabel('');

        $submit = new Element\Submit('submit');
        $submit->setValue('Save');

        $this->add($reg_number);
        $this->add($in_date);
        $this->add($pages_number);
        $this->add($type);
        $this->add($submit);
    }
}