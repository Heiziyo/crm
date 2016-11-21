<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

//`id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
//`name` varchar(20) NOT NULL DEFAULT '' COMMENT '角色名称',
//`parentid` smallint(6) NOT NULL DEFAULT '0' COMMENT '父角色ID',
//`status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
//`remark` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
//`create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
//`update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
//`listorder` int(3) NOT NULL DEFAULT '0' COMMENT '排序字段',
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->commit('角色名称');
            $table->smallInteger('parentid')->commit('父角色ID');
            $table->tinyInteger('status')->default('0')->commit('父角色ID');
            $table->varchar('remark')->default('0')->commit('备注');
            $table->integer('create_time')->default('0')->commit('创建时间');
            $table->integer('update_time')->default('0')->commit('更新时间');
            $table->integer('listorder')->default('0')->commit('排序字段');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
