<?php declare(strict_types=1);

namespace App\Http\Controller\Chat;

use App\Http\Controller\BaseController;
use App\Model\Chat\User;
use Swoft\Http\Message\Request;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Swoft\Http\Server\Annotation\Mapping\RequestMethod;
use Swoft\Validator\Annotation\Mapping\Validate;
use Swoft\Context\Context;
use Swoft\Http\Message\ContentType;
/**
 * Class UserController
 * @package App\Http\Controller\Chat
 * @Controller(prefix="/chat/user")
 */
class UserController extends BaseController
{

    /**
     * @RequestMapping(route="index",method={RequestMethod::GET})
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        $user = User::get();
        $response = Context::get()->getResponse();
        return $response->withStatus(200)
            ->withContentType(ContentType::JSON)
            ->withData($user);
    }

    public function show(Request $request)
    {

    }

    public function edit(Request $request)
    {

    }

    public function update(Request $request)
    {

    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function destroy(Request $request)
    {

    }
}
