<?php

namespace App\Http\Controllers;

use App\Member;
use DB;
use Illuminate\Http\Request;

class c_member extends Controller
{
	public function tambah(){
		$no_member=0;	
		$xx=substr(date("Y"), 2) ;
		$yy=date("m");	
		$nomor=Member::select('no_member')->orderby('no_member', 'desc')->first();
		if (empty($nomor)) {
			$no_member=$xx.$yy."-"."0."."000.001";
			# code...
		}else{
			$nomember=$nomor->no_member;
			$no=explode("-", $nomember);
			$member=str_replace(".", "", $no[1]);
			$member++;
			$kode= sprintf("%07s", $member) ;
			$kode1=substr($kode, 0,1);
			$kode2=substr($kode, 1,3);
			$kode3=substr($kode, 4,3);

			$no_member=$xx.$yy."-".$kode1.".".$kode2.".".$kode3;
		}
		$data=array(
			'no_member' => $no_member,
		);

		return view('customer.memberTambah',  compact('data'));
		
	}
	public function show(){
		
		$data=Member::all();
		return view('customer.member',compact('data'));
		
	}
	public function add(Request $request){
		$jenis=$request->jenis;

		if ($jenis=="Lainnya") {
			$jenis=$request->jenisperusahaan;
		}
		DB::table('member')->insert([
			'no_member' => $request->no_member,
			'nama'		=> $request->nama_lkp,
			'dom_ktp'			=> $request->dom_ktp,
			'nama_perusahaan'	=> $request->perusahaan,
			'domisili_perusahaan'=> $request->dom_perusahaan,
			'rekening'		=> $request->rekening,
			'jenis'		=> $jenis,
			'posisi'		=> $request->posisi,
			'status'	=>"1",
			'tlp'	=>$request->hp,
		]);
		return redirect('/member-customer');
		
	}
	public function ubah(Request $request, $id){
		$jenis=$request->jenis;

		if ($jenis=="Lainnya") {
			$jenis=$request->jenisperusahaan;
		}
		DB::table('member')->where('id', $id)
		->update([
			'nama'		=> $request->nama_lkp,
			'dom_ktp'			=> $request->dom_ktp,
			'nama_perusahaan'	=> $request->perusahaan,
			'domisili_perusahaan'=> $request->dom_perusahaan,
			'rekening'		=> $request->rekening,
			'jenis'		=> $jenis,
			'posisi'		=> $request->posisi,
			'status'	=>"1",
			'tlp'	=>$request->hp,
		]);
		return redirect('/member-customer');
		
	}
	public function detail($id){
		$data = Member::where('id', $id)->first();
		return view('customer.memberDetail', compact('data'));
	}
	public function edit($id){
		$data = Member::where('id', $id)->first();
		return view('customer.memberEdit', compact('data'));
	}
}
