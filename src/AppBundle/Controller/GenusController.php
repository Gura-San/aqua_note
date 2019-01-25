<?php
	/**
	 * Created by PhpStorm.
	 * User: davidg
	 * Date: 2019-01-23
	 * Time: 23:11
	 */

	namespace AppBundle\Controller;

	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Symfony\Component\HttpFoundation\Response;


	class GenusController
	{
		/**
		 * @Route("/genus")
		 */
		public function showAction()
		{
			return new Response('Under the Sea!');
		}
	}