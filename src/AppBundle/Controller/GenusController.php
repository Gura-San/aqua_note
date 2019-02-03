<?php
	/**
	 * Created by PhpStorm.
	 * User: davidg
	 * Date: 2019-01-23
	 * Time: 23:11
	 */

	namespace AppBundle\Controller;

	use Symfony\Component\HttpFoundation\JsonResponse;
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

			$funFact = 'Octopuses can change the color of their body in just *three-tenths* of a second!';

			$funFact = $this->get( 'markdown.parser' )
				->transform( $funFact );

			return $this->render( 'genus/show.html.twig', [
				'name'    => $genusName,
				'funFact' => $funFact,
			] );
		}

		/**
		 * @Route("/genus/{genusName}/notes", name="genus_show_notes", methods={"GET"})
		 */
		public function getNotesAction()
		{

			$notes = [
				[ 'id' => 1, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Octopus asked me a riddle, outsmarted me', 'date' => 'Dec. 10, 2019' ],
				[ 'id' => 2, 'username' => 'AquaWeaver', 'avatarUri' => '/images/ryan.jpeg', 'note' => 'I counted 8 legs...as they wrapped around me', 'date' => 'Dec. 11, 2019' ],
				[ 'id' => 3, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Inked', 'date' => 'Dec. 12, 2019' ],
			];

			$data = [
				'notes' => $notes,
			];

			return new JsonResponse( $data );
		}
	}