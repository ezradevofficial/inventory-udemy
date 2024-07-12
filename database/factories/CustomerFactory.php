<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    protected $customers = [
        ['Wanjiru Kamau', '+254 7XX XXX XXX', 'wanjiru.kamau@example.com', 'Nairobi'],
        ['Ochieng Otieno', '+254 7XX XXX XXX', 'ochieng.otieno@example.com', 'Kisumu'],
        ['Aisha Mohammed', '+254 7XX XXX XXX', 'aisha.mohammed@example.com', 'Mombasa'],
        ['Kipchoge Keino', '+254 7XX XXX XXX', 'kipchoge.keino@example.com', 'Eldoret'],
        ['Njeri Muthomi', '+254 7XX XXX XXX', 'njeri.muthomi@example.com', 'Nyeri'],
        ['Otieno Kamau', '+254 7XX XXX XXX', 'otieno.kamau@example.com', 'Nakuru'],
        ['Fatuma Hassan', '+254 7XX XXX XXX', 'fatuma.hassan@example.com', 'Malindi'],
        ['Mutua Musyoka', '+254 7XX XXX XXX', 'mutua.musyoka@example.com', 'Machakos'],
        ['Wangari Maathai', '+254 7XX XXX XXX', 'wangari.maathai@example.com', 'Nyeri'],
        ['Okoth Obado', '+254 7XX XXX XXX', 'okoth.obado@example.com', 'Migori'],
        ['Amina Ali', '+254 7XX XXX XXX', 'amina.ali@example.com', 'Garissa'],
        ['Kimani Ng\'ang\'a', '+254 7XX XXX XXX', 'kimani.nganga@example.com', 'Kiambu'],
        ['Akinyi Odinga', '+254 7XX XXX XXX', 'akinyi.odinga@example.com', 'Siaya'],
        ['Hussein Omar', '+254 7XX XXX XXX', 'hussein.omar@example.com', 'Lamu'],
        ['Njoroge Karanja', '+254 7XX XXX XXX', 'njoroge.karanja@example.com', 'Murang\'a'],
        ['Atieno Odhiambo', '+254 7XX XXX XXX', 'atieno.odhiambo@example.com', 'Homa Bay'],
        ['Juma Abdalla', '+254 7XX XXX XXX', 'juma.abdalla@example.com', 'Kwale'],
        ['Muthoni Kariuki', '+254 7XX XXX XXX', 'muthoni.kariuki@example.com', 'Kirinyaga'],
        ['Ouma Onyango', '+254 7XX XXX XXX', 'ouma.onyango@example.com', 'Kisii'],
        ['Zainab Ahmed', '+254 7XX XXX XXX', 'zainab.ahmed@example.com', 'Wajir'],
        ['Mwangi Githae', '+254 7XX XXX XXX', 'mwangi.githae@example.com', 'Embu'],
        ['Adhiambo Owino', '+254 7XX XXX XXX', 'adhiambo.owino@example.com', 'Busia'],
        ['Abdi Mohamed', '+254 7XX XXX XXX', 'abdi.mohamed@example.com', 'Mandera'],
        ['Wambui Mwangi', '+254 7XX XXX XXX', 'wambui.mwangi@example.com', 'Nyandarua'],
        ['Onyango Ochieng', '+254 7XX XXX XXX', 'onyango.ochieng@example.com', 'Kakamega'],
        ['Halima Said', '+254 7XX XXX XXX', 'halima.said@example.com', 'Kilifi'],
        ['Mutua Kioko', '+254 7XX XXX XXX', 'mutua.kioko@example.com', 'Kitui'],
        ['Nyambura Mugo', '+254 7XX XXX XXX', 'nyambura.mugo@example.com', 'Laikipia'],
        ['Omondi Oduor', '+254 7XX XXX XXX', 'omondi.oduor@example.com', 'Siaya'],
        ['Khadija Ibrahim', '+254 7XX XXX XXX', 'khadija.ibrahim@example.com', 'Tana River'],
        ['Githinji Maina', '+254 7XX XXX XXX', 'githinji.maina@example.com', 'Nyeri'],
        ['Auma Odinga', '+254 7XX XXX XXX', 'auma.odinga@example.com', 'Kisumu'],
        ['Hassan Ali', '+254 7XX XXX XXX', 'hassan.ali@example.com', 'Mombasa'],
        ['Wanjiku Kamau', '+254 7XX XXX XXX', 'wanjiku.kamau@example.com', 'Kiambu'],
        ['Ochieng Owuor', '+254 7XX XXX XXX', 'ochieng.owuor@example.com', 'Migori'],
        ['Fatma Hussein', '+254 7XX XXX XXX', 'fatma.hussein@example.com', 'Lamu'],
        ['Mutua Musyoka', '+254 7XX XXX XXX', 'mutua.musyoka@example.com', 'Makueni'],
        ['Wangui Njoroge', '+254 7XX XXX XXX', 'wangui.njoroge@example.com', 'Murang\'a'],
        ['Otieno Adhiambo', '+254 7XX XXX XXX', 'otieno.adhiambo@example.com', 'Homa Bay'],
        ['Amina Omar', '+254 7XX XXX XXX', 'amina.omar@example.com', 'Garissa'],
        ['Karanja Njoroge', '+254 7XX XXX XXX', 'karanja.njoroge@example.com', 'Nakuru'],
        ['Atieno Ouko', '+254 7XX XXX XXX', 'atieno.ouko@example.com', 'Kisumu'],
        ['Juma Mohammed', '+254 7XX XXX XXX', 'juma.mohammed@example.com', 'Kwale'],
        ['Njeri Waweru', '+254 7XX XXX XXX', 'njeri.waweru@example.com', 'Nyeri'],
        ['Ouma Otieno', '+254 7XX XXX XXX', 'ouma.otieno@example.com', 'Siaya'],
        ['Zainab Hassan', '+254 7XX XXX XXX', 'zainab.hassan@example.com', 'Mombasa'],
        ['Mwangi Kariuki', '+254 7XX XXX XXX', 'mwangi.kariuki@example.com', 'Murang\'a'],
        ['Adhiambo Onyango', '+254 7XX XXX XXX', 'adhiambo.onyango@example.com', 'Kisumu'],
        ['Abdi Ibrahim', '+254 7XX XXX XXX', 'abdi.ibrahim@example.com', 'Wajir'],
        ['Wambui Ngugi', '+254 7XX XXX XXX', 'wambui.ngugi@example.com', 'Kiambu'],
        ['Onyango Oduor', '+254 7XX XXX XXX', 'onyango.oduor@example.com', 'Siaya'],
        ['Halima Ahmed', '+254 7XX XXX XXX', 'halima.ahmed@example.com', 'Malindi'],
        ['Mutua Nzomo', '+254 7XX XXX XXX', 'mutua.nzomo@example.com', 'Machakos'],
        ['Nyambura Kimani', '+254 7XX XXX XXX', 'nyambura.kimani@example.com', 'Nyandarua'],
        ['Omondi Owino', '+254 7XX XXX XXX', 'omondi.owino@example.com', 'Kisumu'],
        ['Khadija Said', '+254 7XX XXX XXX', 'khadija.said@example.com', 'Lamu'],
        ['Githinji Wachira', '+254 7XX XXX XXX', 'githinji.wachira@example.com', 'Nyeri'],
        ['Auma Otieno', '+254 7XX XXX XXX', 'auma.otieno@example.com', 'Kisumu'],
        ['Hassan Mohamed', '+254 7XX XXX XXX', 'hassan.mohamed@example.com', 'Garissa'],
        ['Wanjiku Muthomi', '+254 7XX XXX XXX', 'wanjiku.muthomi@example.com', 'Embu'],
        ['Ochieng Okoth', '+254 7XX XXX XXX', 'ochieng.okoth@example.com', 'Migori'],
        ['Fatma Ali', '+254 7XX XXX XXX', 'fatma.ali@example.com', 'Mombasa'],
        ['Mutua Kimani', '+254 7XX XXX XXX', 'mutua.kimani@example.com', 'Machakos'],
        ['Wangui Mwangi', '+254 7XX XXX XXX', 'wangui.mwangi@example.com', 'Nyeri'],
        ['Otieno Ochieng', '+254 7XX XXX XXX', 'otieno.ochieng@example.com', 'Kisumu'],
        ['Amina Hussein', '+254 7XX XXX XXX', 'amina.hussein@example.com', 'Malindi'],
        ['Karanja Mwangi', '+254 7XX XXX XXX', 'karanja.mwangi@example.com', 'Nakuru'],
        ['Atieno Awuor', '+254 7XX XXX XXX', 'atieno.awuor@example.com', 'Kisumu'],
        ['Juma Ali', '+254 7XX XXX XXX', 'juma.ali@example.com', 'Lamu'],
        ['Njeri Karanja', '+254 7XX XXX XXX', 'njeri.karanja@example.com', 'Kiambu'],
        ['Ouma Onyango', '+254 7XX XXX XXX', 'ouma.onyango@example.com', 'Kisii'],
        ['Zainab Omar', '+254 7XX XXX XXX', 'zainab.omar@example.com', 'Mombasa'],
        ['Mwangi Njoroge', '+254 7XX XXX XXX', 'mwangi.njoroge@example.com', 'Murang\'a'],
        ['Adhiambo Ochieng', '+254 7XX XXX XXX', 'adhiambo.ochieng@example.com', 'Siaya'],
        ['Abdi Hassan', '+254 7XX XXX XXX', 'abdi.hassan@example.com', 'Garissa'],
        ['Wambui Kariuki', '+254 7XX XXX XXX', 'wambui.kariuki@example.com', 'Nyeri'],
        ['Onyango Omondi', '+254 7XX XXX XXX', 'onyango.omondi@example.com', 'Kisumu'],
        ['Halima Mohammed', '+254 7XX XXX XXX', 'halima.mohammed@example.com', 'Malindi'],
        ['Mutua Munyao', '+254 7XX XXX XXX', 'mutua.munyao@example.com', 'Kitui'],
        ['Nyambura Ngugi', '+254 7XX XXX XXX', 'nyambura.ngugi@example.com', 'Kiambu'],
        ['Omondi Otieno', '+254 7XX XXX XXX', 'omondi.otieno@example.com', 'Kisumu'],
        ['Khadija Ahmed', '+254 7XX XXX XXX', 'khadija.ahmed@example.com', 'Mombasa'],
        ['Githinji Muriithi', '+254 7XX XXX XXX', 'githinji.muriithi@example.com', 'Laikipia'],
        ['Auma Odinga', '+254 7XX XXX XXX', 'auma.odinga@example.com', 'Siaya'],
        ['Hassan Ali', '+254 7XX XXX XXX', 'hassan.ali@example.com', 'Lamu'],
        ['Wanjiku Mwangi', '+254 7XX XXX XXX', 'wanjiku.mwangi@example.com', 'Murang\'a'],
        ['Ochieng Onyango', '+254 7XX XXX XXX', 'ochieng.onyango@example.com', 'Homa Bay'],
        ['Fatma Said', '+254 7XX XXX XXX', 'fatma.said@example.com', 'Kilifi'],
        ['Mutua Kioko', '+254 7XX XXX XXX', 'mutua.kioko@example.com', 'Machakos'],
        ['Wangui Kamau', '+254 7XX XXX XXX', 'wangui.kamau@example.com', 'Nyeri'],
        ['Otieno Owuor', '+254 7XX XXX XXX', 'otieno.owuor@example.com', 'Migori'],
        ['Amina Ibrahim', '+254 7XX XXX XXX', 'amina.ibrahim@example.com', 'Garissa'],
        ['Karanja Njuguna', '+254 7XX XXX XXX', 'karanja.njuguna@example.com', 'Nakuru'],
        ['Atieno Akinyi', '+254 7XX XXX XXX', 'atieno.akinyi@example.com', 'Kisumu'],
        ['Juma Abdalla', '+254 7XX XXX XXX', 'juma.abdalla@example.com', 'Kwale'],
        ['Njeri Muthomi', '+254 7XX XXX XXX', 'njeri.muthomi@example.com', 'Meru'],
        ['Ouma Ochieng', '+254 7XX XXX XXX', 'ouma.ochieng@example.com', 'Kisii'],
        ['Zainab Hussein', '+254 7XX XXX XXX', 'zainab.hussein@example.com', 'Mombasa'],
        ['Mwangi Githinji', '+254 7XX XXX XXX', 'mwangi.githinji@example.com', 'Nyeri']
    ];

    protected static $customerIndex = 0;

    public function definition()
    {
        if (static::$customerIndex < count($this->customers)) {
            $customer = $this->customers[static::$customerIndex];
            static::$customerIndex++;
        } else {
            // Generate random data for additional customers
            $customer = [
                $this->faker->name,
                '+254 7' . $this->faker->numerify('## ### ###'),
                $this->faker->unique()->safeEmail,
                $this->faker->city,
            ];
        }

        return [
            'name' => $customer[0],
            'customer_image' => null,
            'mobile_no' => $customer[1],
            'email' => $customer[2],
            'address' => $customer[3],
            'status' => $this->faker->randomElement([0, 1]),
            'created_by' => $this->faker->numberBetween(1, 5),
            'updated_by' => $this->faker->numberBetween(1, 5),
            'created_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
        ];
    }
}