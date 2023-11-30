<?php
    
namespace App\Controller\Admin;

use Symfony\Component\Uid\Uuid;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class ImageController extends BaseController
{

  /**
   * @Route(methods={"POST"}, path="/admin/image/upload", name="image.upload")
   */
  public function upload(Request $request, TranslatorInterface $translator)
  {
    $path = $request->get('path');
    $extensions = ['jpeg', 'jpg', 'png'];
    $file = $request->files->get('image');
    if (!$file) return $this->json([
      'status' => 'error',
      'message' => $translator->trans("Veuillez sélectionner un fichier")
    ]);
    $extension = strtolower($file->getClientOriginalExtension());
    if (!empty($extensions) && !in_array($extension, $extensions)) return $this->json([
      'status' => 'error',
      'message' => 'Les formats de fichier acceptés sont: ('. implode(', ', $extensions) .')'
    ]);
    $uuid = Uuid::v4();
    $file_name = $uuid->toRfc4122() .'.'. $extension;
    $file_path = $this->getProjectDir('/public' . $path);
    if ($file->move($file_path, $file_name)) {
      return $this->json([ 'status' => 'success', 'filename' => $file_name]);
    }
    return $this->json([
      'status' => 'error',
      'message' => $translator->trans("Une erreur est survenue lors de sauvegarde de fichier")
    ]);
  }

}
