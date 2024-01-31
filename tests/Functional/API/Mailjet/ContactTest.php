<?php

namespace ebitkov\DoctrineApiDriver\Tests\Functional\API\Mailjet;

use ebitkov\DoctrineApiDriver\Tests\ApiTestCase;
use ebitkov\DoctrineApiDriver\Tests\Fixtures\API\Mailjet\Contact;

class ContactTest extends ApiTestCase
{
    public function testGetContactById(): void
    {
        $_em = $this->getEntityManager();
        $contact = $_em->find(Contact::class, 1);

        $this->assertInstanceOf(Contact::class, $contact);
        $this->assertSame(1, $contact->getId());
    }
}
