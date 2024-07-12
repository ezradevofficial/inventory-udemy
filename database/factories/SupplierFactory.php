<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    protected $model = Supplier::class;

    protected $suppliers = [
        ['Nairobi Steel Supplies Ltd.', '+254 712 345 678', 'info@nairobisteel.co.ke', 'Industrial Area, Nairobi'],
        ['Mombasa Timber Traders', '+254 723 456 789', 'sales@mombasatimber.com', 'Mombasa Road, Mombasa'],
        ['Kisumu Paint Solutions', '+254 734 567 890', 'orders@kisumupaint.co.ke', 'Oginga Odinga Street, Kisumu'],
        ['Nakuru Tools & Equipment Co.', '+254 745 678 901', 'support@nakurutools.com', 'Kenyatta Avenue, Nakuru'],
        ['Eldoret Plumbing Essentials', '+254 756 789 012', 'info@eldoretplumbing.co.ke', 'Uganda Road, Eldoret'],
        ['Thika Electrical Components Ltd.', '+254 767 890 123', 'sales@thikaelectrical.com', 'Garissa Road, Thika'],
        ['Machakos Fasteners & Fixings', '+254 778 901 234', 'orders@machakosfasteners.co.ke', 'Mombasa Road, Machakos'],
        ['Nyeri Building Materials Depot', '+254 789 012 345', 'info@nyeribuildingmaterials.com', 'Kimathi Way, Nyeri'],
        ['Kakamega Safety Gear Providers', '+254 790 123 456', 'sales@kakamegasafety.co.ke', 'Mumias Road, Kakamega'],
        ['Garissa Roofing Supplies', '+254 701 234 567', 'info@garissaroofing.com', 'Kismayu Road, Garissa'],
    ];

    public function definition()
    {
        $supplier = $this->faker->unique()->randomElement($this->suppliers);
        return [
            'name' => $supplier[0],
            'mobile_no' => $supplier[1],
            'email' => $supplier[2],
            'address' => $supplier[3],
            'status' => $this->faker->randomElement([0, 1]),
            'created_by' => $this->faker->numberBetween(1, 5),
            'updated_by' => $this->faker->numberBetween(1, 5),
        ];
    }
}