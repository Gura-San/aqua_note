<?php
	/**
	 * Created by PhpStorm.
	 * User: davidg
	 * Date: 2019-02-10
	 * Time: 17:21
	 */

	namespace AppBundle\Entity;

	use Doctrine\ORM\Mapping as ORM;

	/**
	 * @ORM\Entity
	 * @ORM\Table(name="genus")
	 */
	class Genus
	{
		/**
		 * @ORM\Id
		 * @ORM\GeneratedValue(strategy="AUTO")
		 * @ORM\Column(type="integer")
		 */
		private $id;

		/**
		 * @ORM\Column(type="string")
		 */
		private $name;
	}