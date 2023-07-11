<?php
use Faker\Factory;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
if (!function_exists('recommendDimension')) {
    function recommendDimension($page, $part)
    {
        if ($page == 'sections' && $part == 'image') {
            $width = '30px';
            $height = '20px';
        } elseif ($page == 'sections' && $part == 'icon') {
            $width = '304px';
            $height = '203px';
        } else {
            $width = ' ';
            $height = ' ';
        }
        return 'Recommended W=' . $width . '& H:' . $height;
    }
} //end get recommendDimension


if (!function_exists('getModels')) {
    function getModels()
    {
        $modules = [
            'users',
            'settings',
            'admins',
            'roles',
        ];
        // Log::info($modules);
        return $modules;
    }
} //end get models
if (!function_exists('upload_img')) {
    function upload_img($request, $path, $resize)
    {
        if ($request->getClientOriginalExtension() == 'svg') {
            $fileName = time() . '.' . $request->extension();
            $request->move(public_path($path), $fileName);
            return $fileName;
        } else {
            Image::make($request)
                ->resize($resize, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path($path . $request->hashName()));
        }
        return $request->hashName();
    }
} //end of upload_img
if (!function_exists('authUser')) {
    function authUser()
    {
        return auth()->user();
    }
} //end of authUser
if (!function_exists('MultipleUploadFiles')) {
    function MultipleUploadFiles($requests, $path)
    {
        $data = [];
        foreach ($requests as $file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $filename);
            $data[] = $filename;
        }
        return $data;
    }
} //end MultipleUploadFiles
if (!function_exists('MultipleUploadImages')) {
    function MultipleUploadImages($requests, $path, $resize)
    {
        $data = [];
        foreach ($requests as $attach) {
            Image::make($attach)
                ->resize($resize, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path($path . $attach->hashName()));
            $data[] = $attach->hashName();
        }
        return $data;
    }
} //end multiple upload image
