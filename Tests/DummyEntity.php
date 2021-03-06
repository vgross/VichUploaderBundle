<?php

namespace Vich\UploaderBundle\Tests;

use Vich\UploaderBundle\Annotation as Vich;

/**
 * @Vich\Uploadable
  *
  * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class DummyEntity
{
    /**
     * @Vich\UploadableField(mapping="dummy_file", fileNameProperty="fileName")
     */
    protected $file;

    protected $fileName;

    public function getFile()
    {
        $this->file;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }

    public function getFileName()
    {
        return $this->fileName;
    }

    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }
}
