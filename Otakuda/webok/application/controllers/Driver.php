<?
class Driver extends CI_Controller {

        public function index()
        {
                $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));

if ( ! $foo = $this->cache->get('foo'))
{
    echo 'Saving to the cache!<br />';
    $foo = 'foobarbaz!';

    // Save into the cache for 5 minutes
    $this->cache->save('foo', $foo, 300);
}

echo $foo;
        }
}
?>