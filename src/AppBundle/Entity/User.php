<?php
namespace AppBundle\Entity;
//namespace AppBundle\Entity; AJUSTER votre namespace
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="fos_user")
*
*@ORM\Entity(repositoryClass="AppBundle\Entity\UserRepository")
*/
class User extends BaseUser
{
 /**
 * @ORM\Id
 * @ORM\Column(type="integer")
 * @ORM\GeneratedValue(strategy="AUTO")
 */
 protected $id;

    /**
     * @var \isAdvisor
     *
     * @ORM\Column(name="isAdvisor", type="boolean")
     */
    protected $isAdvisor;

    /**
     * @ORM\OneToMany(targetEntity="CalendarBundle\Entity\Appointment", mappedBy="fos_user")
     */
    private $candidat;

    /**
     * @ORM\OneToMany(targetEntity="CalendarBundle\Entity\Appointment", mappedBy="fos_user")
     */
    private $conseiller;

 public function __construct()
 {
 parent::__construct();
 // your own logic
 }
}
