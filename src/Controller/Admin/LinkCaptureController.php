<?php

namespace App\Controller\Admin;

use App\Entity\LinkCapture;
use App\Form\LinkCaptureType;
use App\Repository\LinkCaptureRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Uid\Uuid;

class LinkCaptureController extends AbstractController
{
    /**
   * @Route("/admin/link/add", methods={"GET", "POST"}, name="link_capture_add")
   * @IsGranted("ROLE_ADMIN")
   */
    public function index(Request $request)
    {
        $linkCapture = new LinkCapture();
        $form = $this->createForm(LinkCaptureType::class, $linkCapture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                if (filter_var($form['link']->getData(), FILTER_VALIDATE_URL) !== false) {
                    $linkCapture->setLink($form['link']->getData());
                    // Save the like to the database 
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($linkCapture);
                    $entityManager->flush();
                }
                return $this->redirectToRoute('link_capture_add');
            } catch(Exception $e){
                return $this->redirectToRoute('link_capture_add');
            }
        }

        return $this->render('admin/link_capture/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
    * @Route("/admin/link/capture", name="link_capture")
    * @IsGranted("ROLE_ADMIN")
    */
    public function screensLinks(LinkCaptureRepository $linkCaptureRepository)
    {   
        // get All links has status false 
        $links = $linkCaptureRepository->findByStatusFalse(false);

        $countLinks = count($links);
        $countLinkUpdate = 0;
        
        /* if ($countLinks != 0)
        {
            $countLinkUpdate = $this->Screens($links);
        } */

        /* // size imageScreen 1000px
        $size = 1000;
        foreach ($links as $link) {
            $url = $link->getLink();
            // Check if the URL contains 'http://' or 'https://'
            if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
                // If not, add 'https://'
                $url = 'https://' . $url;
            }

            // get domain name
            $pieces = parse_url($url);
            $domain = isset($pieces['host']) ? $pieces['host'] : ''; 
            if(preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)){ 
                $domain = $regs['domain']; 
            }

            // imageName has name domain link and 
            $imageName = $domain.Uuid::v4()->toRfc4122().'.jpg';

            //Check the correctness of url
            if (filter_var($url, FILTER_VALIDATE_URL) !== false)
            {
                try {
                    // Run the Puppeteer script in a shell command
                    // this is script node js
                    // this script pass $url $imageName and $size
                    $screen = shell_exec("node ../scriptsNode/screenShot.js $url $imageName $size");
                    
                    // If the screen was taken successfully, $screen == true
                    if ($screen) {
                        // Update the link entity with the image and status == true
                        $link->setImage($imageName);
                        $link->setStatus(true);

                        // Update the link to the database
                        $entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($link);
                        $entityManager->flush();

                        $countLinkUpdate++;
                    } 
                } catch(Exception $e) {
                    return $e;
                }
            }
        } */
        return $this->render('admin/link_capture/screenLinks.html.twig',
            [
                'countLinks' => $countLinks,
                'countLinkUpdate' => $countLinkUpdate
            ]);
    }

    /**
    * @Route("/admin/link/doCapture", name="link_DoCapture")
    * @IsGranted("ROLE_ADMIN")
    */
    public function Screens(LinkCaptureRepository $linkCaptureRepository)
    {
        // get All links has status false 
        $links = $linkCaptureRepository->findByStatusFalse(false);

        // size imageScreen 1000px
        $size = 1000;

        $countLinks = count($links);
        // count links Update
        $countLinkUpdate = 0;
        
        foreach ($links as $link) {
            $url = $link->getLink();
            // Check if the URL contains 'http://' or 'https://'
            if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
                // If not, add 'https://'
                $url = 'https://' . $url;
            }

            // get domain name
            $pieces = parse_url($url);
            $domain = isset($pieces['host']) ? $pieces['host'] : ''; 
            if(preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)){ 
                $domain = $regs['domain']; 
            }

            // imageName has name domain link and 
            $imageName = $domain.Uuid::v4()->toRfc4122().'.jpg';

            //Check the correctness of url
            if (filter_var($url, FILTER_VALIDATE_URL) !== false)
            {
                try {
                    // Run the Puppeteer script in a shell command
                    // this is script node js
                    // this script pass $url $imageName and $size
                    $screen = shell_exec("node ../scriptsNode/screenShot.js $url $imageName $size");
                    
                    // If the screen was taken successfully, $screen == true
                    if ($screen) {
                        // Update the link entity with the image and status == true
                        $link->setImage($imageName);
                        $link->setStatus(true);

                        // Update the link to the database
                        $entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($link);
                        $entityManager->flush();

                        $countLinkUpdate++;
                    } 
                } catch(Exception $e) {
                    continue;
                }
            }
        }
        return $this->render('admin/link_capture/screenLinks.html.twig',
            [
                'countLinks' => $countLinks,
                'countLinkUpdate' => $countLinkUpdate
            ]);
    }    
}
