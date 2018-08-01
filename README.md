Installation instructions:

1. clone the repository to desired location using "git clone https://github.com/sauliusGTO3000/CodeAcademyPhpExam.git"
2. in desired location's "my_project" folder, run the following commands:
    "composer install"
    "php bin/console doctrine:database:create"
    "php bin/console doctrine:schema:create"
    "php bin/console doctrine:fixtures:load"
