<?php
return ['routes' =>
[
	/*
	 * Persons
	 */
	// Get all face clusters with faces and file asociated.
	[
		'name' => 'person#index',
		'url'  => '/persons',
		'verb' => 'GET'
	],
	// Get all images filtered by Name.
	[
		'name' => 'person#find',
		'url'  => '/person/{personName}',
		'verb' => 'GET'
	],
	// Change name to a person.
	[
		'name' => 'person#updateName',
		'url'  => '/person/{personName}',
		'verb' => 'PUT'
	],
	// Change visibility to a person.
	[
		'name' => 'person#setVisibility',
		'url'  => '/person/{personName}/visibility',
		'verb' => 'POST'
	],
	// Get all names filtered by an query.
	[
		'name' => 'person#autocomplete',
		'url'  => '/autocomplete/{query}',
		'verb' => 'GET'
	],
	/*
	 * Clusters
	 */
	// Get a cluster by Id.
	[
		'name' => 'cluster#find',
		'url'  => '/cluster/{id}',
		'verb' => 'GET'
	],
	// Get all clusters filtered by Name.
	[
		'name' => 'cluster#findByName',
		'url'  => '/clusters/{personName}',
		'verb' => 'GET'
	],
	// Get all clusters unassigned clusters.
	[
		'name' => 'cluster#findUnassigned',
		'url'  => '/clusters',
		'verb' => 'GET'
	],
	// Change visibility to cluster
	[
		'name' => 'cluster#setVisibility',
		'url'  => '/cluster/{id}/visibility',
		'verb' => 'POST'
	],
	// Detach Face from cluster
	[
		'name' => 'cluster#detachFace',
		'url'  => '/cluster/{id}/detach',
		'verb' => 'PUT'
	],
	// Change name to a cluster.
	[
		'name' => 'cluster#updateName',
		'url'  => '/cluster/{id}',
		'verb' => 'PUT'
	],
	/*
	 * Face thumbails
	 */
	// Get a face Thumb
	[
		'name' => 'face#getThumb',
		'url'  => '/face/{id}/thumb/{size}',
		'verb' => 'GET'
	],
	/*
	 * File and Folders
	 */
	// Get persons from path
	[
		'name' => 'file#getPersonsFromPath',
		'url'  => '/file',
		'verb' => 'GET'
	],
	// Get folder preferences
	[
		'name' => 'file#getFolderOptions',
		'url'  => '/folder',
		'verb' => 'GET'
	],
	// Set folder preferences
	[
		'name' => 'file#setFolderOptions',
		'url'  => '/folder',
		'verb' => 'PUT'
	],
	/*
	 * Settings
	 */
	// User settings
	[
		'name' => 'settings#setUserValue',
		'url' => '/setuservalue',
		'verb' => 'POST'
	],
	[
		'name' => 'settings#getUserValue',
		'url' => '/getuservalue',
		'verb' => 'GET'
	],
	// App settings
	[
		'name' => 'settings#setAppValue',
		'url' => '/setappvalue',
		'verb' => 'POST'
	],
	[
		'name' => 'settings#getAppValue',
		'url' => '/getappvalue',
		'verb' => 'GET'
	],
	/*
	 * Status of process.
	 */
	// Get process status.
	[
		'name' => 'process#index',
		'url'  => '/process',
		'verb' => 'GET'
	],

], 'ocs' => [
	/*
	 * OCS Person API
	 */
	// Get all named persons
	[
		'name' => 'PersonApi#getPersons',
		'url' => '/api/v1/persons',
		'verb' => 'GET',
	],
	// Get all faces associated to a person
	[
		'name' => 'PersonApi#getFacesByPerson',
		'url' => '/api/v1/person/{name}/faces',
		'verb' => 'GET',
	],
]];