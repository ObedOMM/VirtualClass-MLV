<?php

namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{

	public function __construct()
	{
		$this->authorizeResource(Organization::class, 'organization');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Organization  $organization
	 * @return \Illuminate\Http\Response
	 */
	public function show(Organization $organization)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Organization  $organization
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Organization $organization)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Organization  $organization
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Organization $organization)
	{
		//
	}
}
