<?php
class  Model //定义一个类Model
{
    public $text; //定义一个公共的成员属性$text

    public  function __construct() //定义一个公共的成员方法：构造方法。即在实例化对象的同时就为这个对象的属性进行赋值
    {
        $this->text='Hello,world!'; //引用当前类中的成员属性text,将hello,world赋值给他。
    }
}

class View //定义一个类View:View类中的变量大多是私有变量，但是会有公共的方法
{
    private $model; //定义一个私有的成员属性model

    public function __construct(Model $model) //定义一个公共的成员方法：构造方法，且将类model作为参数传入
    {
        $this->model = $model; //应用当前类中的model,将类model赋值给他。
    }


    public function output() //定义一个公共的成员方法
    {
        return '<h1>'.$this->model->text.'</h1>'; //返回当前类中的model成员属性中的text成员属性，即hello,world.
    }
}

Class Controller //定义一个类Controller:此处controller没有多大的用处，原因：没有用户互动，当前是静态的文本。有用户互动，controller才有意义
{
    private $model; //定义一个私有的成员属性model

    public function __construct(Model $model) //定义一个私有的成员属性model，将类model作为参数传入
    {
        $this->model=$model;//将当前类中的model赋值为类model.
    }
}

$model = new Model(); //根据Model类创建一个model对象
$controller = new Controller($model); //根据Controller类创建一个controller对象，且将类model传入
$view = new View($model);//创建一个新类View,且将类model作为参数传入。

echo $view->output();
?>
