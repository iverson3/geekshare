<?php  

namespace Home\IndexBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ShareType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ->setAction('/doshare') // 设置表单提交的地址
            ->setMethod('POST')                                   // 设置提交的方式
            ->add('title', 'text', array('label' => '标题:'))
            ->add('reason', 'text', array('label' => '理由:'))
            ->add('url', 'text', array('label' => '地址:'))
            ->add('labels', 'text', array('label' => '标签:'))
            ->add('isown', 'integer', array('label' => '是否原创:'))
            ->add('lang', 'integer', array('label' => '语言类别ID:'))
            ->add('submit', 'submit', array('label' => '提 交'));   // 表单提交按钮
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        // 设置表单字段的验证规则
        $metadata->addPropertyConstraint('title',new NotBlank(array('message' => 'You must enter your name')));
        $metadata->addPropertyConstraint('url',  new NotBlank(array('message' => 'You must enter a comment')));
    }

    public function getName()
    {
        return 'share';
    }
    
}

?>