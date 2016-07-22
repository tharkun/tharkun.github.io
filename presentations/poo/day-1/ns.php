<?php

namespace Vendor {

    class A
    {

    }


    class B
    {
        public function hello()
        {
            A::class;
            \Vendor\A::class;
        }
    }
}

namespace Vendor2 {
    class A
    {
        public function hello()
        {
            \Vendor\A::class;
        }
    }
}
