<?php

/**
 * This file is part of the DocPHT project.
 * 
 * @author Valentino Pesce
 * @copyright (c) Valentino Pesce <valentino@iltuobrand.it>
 * @copyright (c) Craig Crosby <creecros@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DocPHT\Form;

use Nette\Forms\Form;
use Nette\Utils\Html;

class AddUserForm extends MakeupForm
{
    public function create()
    {
        $users = json_decode(file_get_contents(realpath('src/config/users.json')), true);
        $usernames = [];

        foreach ($users as $user) { array_push($usernames,$user['Username']); }

        $form = new Form;
        $form->onRender[] = [$this, 'bootstrap4'];

        $form->addGroup('Create User')
            ->setOption('description', 'Enter a new username and password for the account.');

        $form->addText('username', 'Enter Username:')
            ->setHtmlAttribute('placeholder', 'Enter username')
            ->setHtmlAttribute('autocomplete','off')
            ->setRequired('Enter username');
            
        $form->addPassword('password', 'Enter password:')
            ->setHtmlAttribute('placeholder', 'Enter password')
            ->setHtmlAttribute('autocomplete','off')
            ->setAttribute('onmousedown',"this.type='text'")
            ->setAttribute('onmouseup',"this.type='password'")
            ->setAttribute('onmousemove',"this.type='password'")
            ->setOption('description', Html::el('small')->setAttribute('class','text-muted')->setText('Click on the asterisks to show the password'))
            ->addRule(Form::MIN_LENGTH, 'The password must be at least 6 characters long', 6)
            ->setRequired('Enter password');
            
        $form->addPassword('confirmpassword', 'Confirm password:')
            ->setHtmlAttribute('placeholder', 'Confirm password')
            ->setHtmlAttribute('autocomplete','off')
            ->setAttribute('onmousedown',"this.type='text'")
            ->setAttribute('onmouseup',"this.type='password'")
            ->setAttribute('onmousemove',"this.type='password'")
            ->setOption('description', Html::el('small')->setAttribute('class','text-muted')->setText('Click on the asterisks to show the password'))
            ->addRule($form::EQUAL, 'Passwords do not match!', $form['password'])
            ->setRequired('Confirm password');

        $translations = json_decode(file_get_contents(realpath('src/translations/code-translations.json')), true);
        $form->addSelect('translations','Language:', $translations)
            ->setPrompt('Select an option')
            ->setHtmlAttribute('data-live-search','true')
            ->setRequired('Select an option');

        $form->addSubmit('submit','Create new user');

        if ($form->isSuccess()) {
            $values = $form->getValues();
            if (isset($values['username']) && isset($values['password']) && $values['password'] == $values['confirmpassword'] && !in_array($values['username'], $usernames)) {
                array_push($users, ['Username' => $values['username'], 'Password' => password_hash($values['password'], PASSWORD_DEFAULT), 'Language' => $values['translations'] ]);
                file_put_contents('src/config/users.json',json_encode($users));
                $good = 'User created successfully.';
                header('Location:'.BASE_URL.'admin/?good='.utf8_encode(urlencode($good)));
				exit;
            } else {
                $bad = 'Sorry something didn\'t work!';
                header('Location:'.BASE_URL.'admin/?bad='.utf8_encode(urlencode($bad)));
				exit;
            }
            $form->setValues([], TRUE);
        }

        $renderer = $form->getRenderer();
        $renderer->wrappers['pair']['.error'] = 'has-error';

        return $form;
    }
}
