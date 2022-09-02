Skip to content
Search or jump to…
Pull requests
Issues
Marketplace
Explore
 
@kinoshitaken123 
asterisk-lab
/
CakePHP
Public
Code
Issues
Pull requests
Actions
Projects
Security
Insights
CakePHP/code-002/src/Model/Entity/User.php /
@asterisk-lab
asterisk-lab CakePHP第５回～第８回までのソース
Latest commit a9b7c7f on 2 Jun 2021
 History
 1 contributor
49 lines (46 sloc)  1.18 KB

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $account
 * @property string $password
 * @property string $name
 * @property string $email
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string|null $created_user
 * @property string|null $modified_user
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'account' => true,
        'password' => true,
        'name' => true,
        'email' => true,
        'created' => true,
        'modified' => true,
        'created_user' => true,
        'modified_user' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
