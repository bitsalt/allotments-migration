<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AllotmentsTableSeeder::class);
        $this->call(AllotmentTypesTableSeeder::class);
        $this->call(AllotFormulasTableSeeder::class);
        $this->call(AllotFormulasMetaTableSeeder::class);
        $this->call(AllotGradeLevelsTableSeeder::class);
        $this->call(AnnouncementsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        $this->call(GradeLevelsTableSeeder::class);
        $this->call(MembershipTableSeeder::class);
        $this->call(MileageTableSeeder::class);
        $this->call(MileageVarsTableSeeder::class);
        $this->call(SchoolGradesTableSeeder::class);
        $this->call(SchoolTypeTableSeeder::class);
        $this->call(NewparmsTableSeeder::class);
        $this->call(ReportingDaysTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
        $this->call(SchoolYearsTableSeeder::class);
        $this->call(SpecificReportsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserRoleTableSeeder::class);
        $this->call(LegacyAllotmentsTableSeeder::class);
        $this->call(LegacyMembership2006TableSeeder::class);
        $this->call(LegacyParamsTableSeeder::class);
        $this->call(LegacyResourcesTableSeeder::class);
        $this->call(LegacySchoolsTableSeeder::class);
    }
}
