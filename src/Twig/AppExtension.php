<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Detection\MobileDetect;
class AppExtension extends AbstractExtension
{
    /**
     * @var MobileDetect
     */
    private $detect;
    public function __construct() {
        $this->detect = new MobileDetect();
    }

    public function getFilters()
    {
        return [
            new TwigFilter('get_device', [$this, 'getDevice']),
        ];
    }

    public function getDevice()
    {

       return ($this->detect->isMobile() ? ($this->detect->isTablet() ? 'tablet' : 'phone') : 'pc');
    }
}