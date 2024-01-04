<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosFixture
 */
class UsuariosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'usuario' => 'Lorem ipsum dolor sit amet',
                'clave' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-01-04 02:48:51',
                'modified' => '2024-01-04 02:48:51',
            ],
        ];
        parent::init();
    }
}
