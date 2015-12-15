<?php
namespace TutorialTest;
use Silex\WebTestCase;

/**
 * Clasa de test simpla pentru a verifica ruta de status
 */
class BasicTest extends WebTestCase {
    public function createApplication()
    {
        $app = require __DIR__ . '/../app/bootstrap.php';
        $app['debug'] = true;
        
        return $app;
    }
    
    /**
     * Verificarea rutei de status
     */
    public function testStatusRoute()
    {
        $client = $this->createClient();
        $client->request('GET', '/');
        $this->assertTrue($client->getResponse()->isOk());
        $this->assertEquals(
            'Up and running.',
            $client->getResponse()->getContent()
        );
    }
}
