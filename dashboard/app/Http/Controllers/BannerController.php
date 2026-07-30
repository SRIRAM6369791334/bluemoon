<?php

namespace App\Http\Controllers;

use App\Models\BannerImage;
use App\Models\OfferBannerImage;
use App\Models\SectionBanner;
use Illuminate\Http\Request;

class BannerController extends Controller {
    public function index() {
        $bannerImages =  BannerImage::orderBy( 'id', 'asc' )->get();
        $webbannerImages = SectionBanner::orderBy( 'id', 'asc' )->get();
        return view( 'pages.banner', compact( 'bannerImages', 'webbannerImages' ) );
    }

    // ADD

    public function addbanner( Request $request ) {
        $request->validate( [
            'banner_image' => 'nullable|mimes:png,jpg,webp,jpeg'
        ] );

        if ( $request->hasFile( 'banner_image' ) ) {


        $file = $request->file('banner_image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/bannerimages'), $filename);
         $path= 'uploads/bannerimages/' . $filename;

            BannerImage::create( [
                'banner_image' =>  $path,
            ] );

            $bannerImages =  BannerImage::orderBy( 'id', 'asc' )->get();
            // $webbannerImages = OfferBannerImage::orderBy( 'id', 'asc' )->get();
            return response()->json( [
                'status'=>'200',
                'message' => 'Banner Image Added Successfully',
            ] );
        }
        return redirect( 'bannerImages' )->with( 'error', 'No Image found' );
    }

    // UPDATE BANNER

    public function updatebanner(Request $request){
        $bannerid = $request->bannerid;
        $postion = $request->positionid;








       $updatebanner = BannerImage::where('id',$bannerid)->first();






        if ( $request->hasFile( 'banner_image' ) ) {


        $file = $request->file('banner_image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/bannerimages'), $filename);
         $path= 'uploads/bannerimages/' . $filename;

            $updatebanner->update( [
                'banner_image' =>  $path,
                'banner_position' => $postion,
            ] );

            $bannerImages =  BannerImage::orderBy( 'id', 'asc' )->get();
            // $webbannerImages = OfferBannerImage::orderBy( 'id', 'asc' )->get();
            return response()->json( [
                'status'=>'200',
                'message' => 'Banner Image Added Successfully',
            ] );
        }
        else{
             return response()->json( [
                'status'=>'200',
                'message' => 'Banner Image not selected',
            ] );
        }
    }


    public function addsection(Request $request){

          $request->validate( [
            'section_image' => 'nullable|mimes:png,jpg,webp,jpeg'
        ] );

        if ( $request->hasFile( 'section_image' ) ) {


        $file = $request->file('section_image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/sectionimages'), $filename);
         $path= 'uploads/sectionimages/' . $filename;

            SectionBanner::create( [
                'banner' =>  $path,
            ] );

            $bannerImages =  SectionBanner::orderBy( 'id', 'asc' )->get();
            // $webbannerImages = OfferBannerImage::orderBy( 'id', 'asc' )->get();
            return response()->json( [
                'status'=>'200',
                'message' => 'Section Image Added Successfully',
            ] );
        }
        return redirect( 'bannerImages' )->with( 'error', 'No Image found' );

    }

    // update section
    public function upadetsection(Request $request){
        $sectionid = $request->sectionid;
        $section =  SectionBanner::where('id','$sectionid')->first();

          if ( $request->hasFile( 'section_image' ) ) {


        $file = $request->file('section_image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/sectionimages'), $filename);
         $path= 'uploads/sectionimages/' . $filename;

            $section->update( [
                'banner' =>  $path,

            ] );

            $bannerImages =  SectionBanner::orderBy( 'id', 'asc' )->get();
            // $webbannerImages = OfferBannerImage::orderBy( 'id', 'asc' )->get();
            return response()->json( [
                'status'=>'200',
                'message' => 'Banner Image Added Successfully',
            ] );
        }
        
        else{
              return response()->json( [
                'status'=>'200',
                'message' => 'Banner Image not selected',
            ] );
        }



    }


}