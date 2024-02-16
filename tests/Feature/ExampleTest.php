<?php

namespaceTests\Feature;

//useIlluminate\Foundation\Testing\RefreshDatabase;
useTests\TestCase;

classExampleTestextendsTestCase
{
/**
*Abasictestexample.
*
*@returnvoid
*/
publicfunctiontest_the_application_returns_a_successful_response()
{
$response=$this->get('/');

$response->assertStatus(200);
}
}
