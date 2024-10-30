<?php 

namespace App\Models;
use Illuminate\Support\Arr;

class Post 
{
    public static function all()
    {
        return [
            [
                'id'=> 1,
                'slug' => '1-background',
                'title' => ' Background',
                'body' => 'Indonesia stands at a pivotal moment in its pursuit of sustainable development and climate resilience. As the worlds fourth most populous country and a significant contributor to global greenhouse gas emissions, Indonesia has committed to achieving net zero emissions by 2060. This ambitious goal requires a fundamental transformation of the countrys energy systems which translated by the Indonesian government with an energy policy plan, known as the National Energy Policy (Kebijakan Energi Nasional  KEN), which aims to manage the availability of national energy until 2050 with focuses on New and Renewable Energy (NRE), energy mix, coal management, natural gas, energy subsidy prices and provisions for reducing energy subsidies.
                    As response, the Ministry of Energy and Mineral Resources (MEMR) is working toward implementing Indonesias energy transition plan by organizing a number of strategic programs to tackle issues regarding carbon emission reduction, energy transition acceleration, and the creation of a cleaner and sustainable energy supply according to the Net Zero Emission (NZE) Roadmap. These efforts will also require a strategic shift in the human capital that will drive this change as they will create a new era of job opportunities, particularly within the green collar workforce.
                    As one of many strategies to develop qualified and competent human resources to achieve energy transition towards Net Zero Emission, the Human Resources Development Agency Ministry of Energy & Mineral Resources Republic of Indonesia organized the first Human Capital Summit by on 21st of March 2023 in Jakarta with the theme “Human Capital Development towards Net Zero Emission 2060”.
                    The summit gathered respective stakeholders and raised awareness of the importance of human capital development during the Just Transition, as shown in commitment declaration by main energy stakeholders in Indonesia, including their commitment to facilitate internship program for the State Civil Apparatus Ministry of Energy and Mineral Resources to help identifying future greencollar workforce and their capacity building needs
                    The green collar workforce are not only those employed in environmental sectors, including renewable energy, energy efficiency, and sustainable practices, but also sustainable practitioners in the transforming fossil fuels industries. Well-equipped, skilled, and adaptable green collar workforce are essential to develop, implement, and maintain the technologies and infrastructures that will power Indonesias sustainable future. However, this transformation poses significant challenges, including the need for targeted education and training and the development of new competencies.
                    In order to ensure the transformation of those green collar workforce, the creation of supportive polices and frameworks that can foster this workforce transition will be essential. Therefore, the Human Resources Development Agency Ministry of Energy & Mineral Resources Republic of Indonesia is planning the 2nd Human Capital Summit with the theme “Accelerating the Transformation
                    of Green Collar Workforce toward Energy Transition” in Jakarta, in upcoming June 2025. 
                    Ensuring the involvement of key stakeholders, the summit will be the conclusion of series of events, 
                    including program launching in September 2024, seminars, FGDs, policy framework setup from September to March 2024.'
            ],
            [
                'id'=> 2,
                'slug' => '2-objective',
                'title' => ' Objective',
                'body' => 'The 1st Human Capital Summit (HCS1 - 2023) produced a key message about the urgency of providing policies to accelerate human resource development for Net Zero Emission 2060. It was agreed that a well-defined policy framework is essential for guiding government, industry, and educational institutions in developing the skills and competencies needed for just energy transition in Indonesia.
                        Regarding this, the main objective of 2nd Human Capital Summit (HCS2 - 2025) is to design and propose a comprehensive policy framework that supports the acceleration of the green collar workforce transformation that aligns with Indonesias energy transition goals.
                        This main objective is also supported by several more specific objectives, namely : 
                        To map green jobs in the energy sector and identify its human resource needs (especially the need for skills and competencies according to industry demand) that must be addressed to facilitate the energy transition.
                        To establish and strengthen partnershipsbetween key stakeholders (government, industry, academia, and civil society) to support workforce development for the green economy.
                        To secure commitments from key stakeholders (government, industry, academia, and civil society) for specific actions that will advance the development of Indonesias green collar workforce.'
            ],
            [
                'id'=> 3,
                'slug' => '3-output',
                'title' => ' Output',
                'body' => 'Based on the objectives, HCS-2 will produce outputs:

                A strategic document that identifies the main and most important policy directions to accelerate the transformation of the green-collar workforce to support the energy transition towards Net Zero Emission 2060
                Green Jobs Occupation Map in the Energy & Mineral Resources Sector
                Paper on the Analysis of Human Resource needs to support the energy transition in Indonesia, especially related to the quantification of workforce needs
                Declaration and signing commitment for collaboration and synchronization of actions in accelerating the transformation of green collar workforce in Indonesia
'
            ]
        ];
    }

    public static function find($slug) : array
    {
        $post = Arr::first(static::all(), fn ($post)=> $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}

?>