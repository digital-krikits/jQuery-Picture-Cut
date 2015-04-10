<?php namespace Digitalkrikits\Picturecut;

class Picturecut
{

    protected $pictureCut;

    public function __construct()
    {
        try {
            $this->pictureCut = PictureCut::createSingleton();
        } catch (\Exception $e) {}
    }

    public function crop()
    {
        try {
            if($this->pictureCut->crop()){
                print $this->pictureCut->toJson();
            } else {
                print $this->pictureCut->exceptionsToJson();
            }
        } catch (\Exception $e) {}
    }

    public function upload()
    {
        try {
            if($this->pictureCut->upload()){
                print $this->pictureCut->toJson();
            } else {
                print $this->pictureCut->exceptionsToJson();
            }
        } catch (\Exception $e) {}

    }

}