<?php
	/**
	 * Created by PhpStorm.
	 * User: davidg
	 * Date: 2019-01-23
	 * Time: 23:11
	 */

	namespace AppBundle\Controller;

	use Symfony\Component\Routing\Annotation\Route;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Response;


	class GenusController extends Controller
	{
		/**
		 * @Route("/genus/{genusName}")
		 */
		public function anotherAction( $genusName )
		{
			$notes = [
				'Octopus asked a riddle, outsmarted me',
				'I counted 8 legs... as they wrapped around me',
				'Inked!'
			];

			return $this->render( 'genus/show.html.twig', [
				'name' => $genusName,
				'notes' => $notes
			] );
		}

		/**
		 * @Route("/genus/{genusName}/notes", methods={"GET"})
		 */
		public function getNotesAction() {

		}
	}