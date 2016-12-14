<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>前端课程体系</title>
    <link rel="stylesheet" href="{{ asset('/coursestyle/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/coursestyle/css/reset.css') }}">
    <script src="{{asset('/coursestyle/js/jquery.min.js')}}"></script>
    <script src="{{asset('/coursestyle/js/main.js')}}"></script>
</head>
<body>
<div class="page">
    <div class="head">
        <div class="head_content">
            <div class="head_titie">
                <h3 class="">前端</h3>
                <p>包含html,css,html5,css3,javascript,juqery</p>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="box">
            <div class="table">
                <div class="table_title clearfix">
                    <div class="fl">
                        <a href="javaScript:;" class="chapter active">查看章节</a>
                        <a href="javaScript:;" class="spread">全部展开</a>
                    </div>
                    <div class="fr">
                        <a href="#" class="details">课程详情</a>
                    </div>
                </div>
                <div class="table_list">
                   <div class="curriculum">
                       <h3>HTML</h3>
                       <div class="title-list">
                           <h3>
                               <a href=""><span>1</span>HTML介绍</a>
                           </h3>
                           <ul>
                               <li><a href="#" target="_blank">发展介绍</a></li>
                               <li><a href="">网页中常用术语</a></li>
                           </ul>
                       </div>
                       <div class="title-list">
                           <h3>
                               <a href=""><span>2</span>HTML基础</a>
                           </h3>
                           <ul>
                               <li><a href="">html语言的结构特点</a></li>
                               <li><a href="">html语言的基本结构</a></li>
                               <li><a href="">html语言的版本</a></li>
                               <li><a href="">html常用的编辑器</a></li>
                           </ul>
                       </div>
                       <div class="title-list">
                          <h3>
                              <a href=""><span>3</span>HTML进阶</a>
                          </h3>
                          <ul>
                              <li><a href="">常用的结构标签</a></li>
                              <li><a href="">常用的格式标签</a></li>
                              <li><a href="">常用的功能标签</a></li>
                              <li><a href="">其他标签</a></li>
                          </ul>
                      </div>
                   </div>
                    <div class="curriculum">
                       <h3>CSS</h3>
                       <div class="title-list">
                           <h3>
                               <a href=""><span>4</span>css基础</a>
                           </h3>
                           <ul>
                               <li><a href="#" target="_blank">css概念及语法基础</a></li>
                               <li><a href="">css样式的四种使用方式</a></li>
                               <li><a href="">css基本格式</a></li>
                               <li><a href="">css选择器</a></li>
                           </ul>
                       </div>
                       <div class="title-list">
                           <h3>
                               <a href=""><span>5</span>css进阶</a>
                           </h3>
                           <ul>
                               <li><a href="">css属性（字体属性、颜色属性、文本属性、边框属性等）</a></li>
                               <li><a href="">css命名规则</a></li>
                               <li><a href="">css兼容性处理</a></li>
                               <li><a href="">css使用技巧</a></li>
                           </ul>
                       </div>
                   </div>

                    <div class="curriculum">
                        <h3>javascript基础-精通</h3>
                        <div class="title-list">
                            <h3>
                                <a href=""><span>6</span>javascript基础</a>
                            </h3>
                            <ul>
                                <li><a href="#" target="_blank">概述（js历史、变量、命名规则、数据类型等等）</a></li>
                                <li><a href="">流程控制语句（if语句、ifelse语句、for循环语句等等）</a></li>
                                <li><a href="">函数和对象（函数的创建、数组对象、正则表达式）</a></li>
                                <li><a href="">事件与处理程序（常见事件、程序处理）</a></li>
                                <li><a href="">DOM操作（浏览器对象）</a></li>
                            </ul>
                        </div>
                        <div class="title-list">
                            <h3>
                                <a href=""><span>7</span>javascript进阶</a>
                            </h3>
                            <ul>
                                <li><a href="">闭包、作用域、变量提升（变量的作用域、提升、闭包等）</a></li>
                                <li><a href="">面向对象编程（创建对象、原型继承、class继承）</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="curriculum">
                        <h3>jquery基础-精通</h3>
                        <div class="title-list">
                            <h3>
                                <a href=""><span>8</span>jquery基础</a>
                            </h3>
                            <ul>
                                <li><a href="http://www.baidu.com" target="_blank">jquery选择器（基础选择器、过滤选择器等）</a></li>
                                <li><a href="">事件（事件绑定、事件冒泡等）</a></li>
                                <li><a href="">jquery动画（常见动画制作）</a></li>
                                <li><a href="">html操作</a></li>
                            </ul>
                        </div>
                        <div class="title-list">
                            <h3>
                                <a href=""><span>9</span>jquery进阶</a>
                            </h3>
                            <ul>
                                <li><a href="">jquery 插件</a></li>
                                <li><a href="">常见页面动画（轮播图、tab切换、下拉菜单等） </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="curriculum">
                        <h3>ajax入门-精通</h3>
                        <div class="title-list">
                            <h3>
                                <a href=""><span>10</span>基础</a>
                            </h3>
                            <ul>                                                    
                                <li><a href="#" target="_blank">ajax概述</a></li>
                                <li><a href="">数据格式（xml、html、json）</a></li>
                            </ul>
                        </div>
                        <div class="title-list">
                            <h3>
                                <a href=""><span>11</span>进阶</a>
                            </h3>
                            <ul>
                                <li><a href="">原生js ajax 请求(XMLHTTPREQUEST对象)</a></li>
                                <li><a href="">jquery ajax 方法（$.ajax、$.get、$.post等）</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="curriculum">
                        <h3>响应式网站原理</h3>
                        <div class="title-list">
                            <h3>
                                <a href=""><span>12</span>课程列表</a>
                            </h3>
                            <ul>                                                    
                                <li><a href="#" target="_blank">响应式设计理念</a></li>
                                <li><a href="">响应式设计原理（media查询，常见的meta）</a></li>
                                <li><a href="">响应式单位(em 、rem、 vh、 vw、 vmix、 vmin等)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="curriculum">
                        <h3>响应式框架bootstrap</h3>
                        <div class="title-list">
                            <h3>
                                <a href=""><span>13</span>课程列表</a>
                            </h3>
                            <ul>                                                  
                                <li><a href="#" target="_blank">全局css样式（栅格布局、样式等）</a></li>
                                <li><a href="">布局</a></li>
                                <li><a href="">组件（响应式导航、轮播图等）</a></li>
                                <li><a href="">项目案例（响应式整站）</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="curriculum">
                        <h3>HTML5</h3>
                        <div class="title-list">
                            <h3>
                                <a href=""><span>14</span>课程列表</a>
                            </h3>
                            <ul>                                                              
                                <li><a href="#" target="_blank">新增标签、属性（结构性标签）</a></li>
                                <li><a href="">删除标签、属性（样式性标签）</a></li>
                                <li><a href="">HTML5 常用API</a></li>
                                <li><a href="">本地存储</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="curriculum">
                        <h3>CSS3</h3>
                        <div class="title-list">
                            <h3>
                                <a href=""><span>15</span>课程列表</a>
                            </h3>
                            <ul>                                                                               
                                <li><a href="#" target="_blank">css3 新增属性</a></li>
                                <li><a href="">删除属性</a></li>
                                <li><a href="">浏览器兼容性</a></li>
                                <li><a href="">css3动画</a></li>
                                 <li><a href="">项目案例（html5邀请函）</a></li>
                            </ul>
                        </div>
                    </div>
                     <div class="curriculum">
                        <h3>CSS3预处理器</h3>
                        <div class="title-list">
                            <h3>
                                <a href=""><span>16</span>课程列表</a>
                            </h3>
                            <ul>
                                <li><a href="#" target="_blank">预处理器概述</a></li>
                                <li><a href="">常见的3种预处理器 sass、 less、 stylus区别</a></li>
                                <li><a href="">语法</a></li>
                                <li><a href="">使用</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="curriculum">
                        <h3>旅烨cms套站/phpcms套站</h3>
                        <div class="title-list">
                            <h3>
                                <a href=""><span>17</span>课程列表</a>
                            </h3>
                            <ul>                                                                                            
                                <li><a href="#" target="_blank">框架概述</a></li>
                                <li><a href="">头部、尾部页面</a></li>
                                <li><a href="">频道页</a></li>
                                <li><a href="">列表页</a></li>
                                <li><a href="#">内容页</a></li>
                                <li><a href="">单页面</a></li>
                                <li><a href="">首页栏目的调用</a></li>
                                <li><a href="">项目案例</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="curriculum">
                        <h3>jquery mobile框架</h3>
                        <div class="title-list">
                            <h3>
                                <a href=""><span>18</span>课程列表</a>
                            </h3>
                            <ul>                                                                                     
                                <li><a href="#" target="_blank">框架概述</a></li>
                                <li><a href="">css样式（表格 、列表、面板等）</a></li>
                                <li><a href="">组件的使用</a></li>
                                <li><a href="">项目案例（webapp）</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="curriculum">
                        <h3>微信公众号开发 </h3>
                        <div class="title-list">
                            <h3>
                                <a href=""><span>19</span>课程列表</a>
                            </h3>
                            <ul>                                                                                            
                                <li><a href="#" target="_blank">公众号的申请</a></li>
                                <li><a href="">推送消息</a></li>
                                <li><a href="">微信JSSDK 用法</a></li>
                                <li><a href="">项目案例</a></li>
                            </ul>
                        </div>
                    </div>                                                        
                    <div class="curriculum">
                        <h3>angular.js</h3>
                        <div class="title-list">
                            <h3>
                                <a href=""><span>20</span>章节一</a>
                            </h3>
                            <ul>
                                <li><a href="#" target="_blank">AngularJS 简介</a></li>
                                <li><a href="">AngularJS 表达式</a></li>
                                <li><a href="">AngularJS 指令</a></li>
                                <li><a href="">AngularJS 模型</a></li>
                                <li><a href="">AngularJS Scope(作用域)</a></li>
            
                            </ul>
                        </div>
                        <div class="title-list">
                            <h3>
                                <a href=""><span>21</span>章节二</a>
                            </h3>
                            <ul>
                                <li><a href="">AngularJS 控制器</a></li>
                                <li><a href="">AngularJS 过滤器</a></li>
                            </ul>
                        </div>
                         <div class="title-list">
                            <h3>
                                <a href=""><span>22</span>章节三</a>
                            </h3>
                            <ul>
                                <li><a href="">AngularJS Service </a></li>
                                <li><a href="">AngularJS Http</a></li>
                                <li><a href="">AngularJS Select</a></li>
                                <li><a href="">AngularJS SQL</a></li>
                                <li><a href="">AngularJS HTML DOM </a></li>
                                <li><a href="">项目案例 </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="curriculum">
                        <h3>svn/git版本控制器 </h3>
                        <div class="title-list">
                            <h3>
                                <a href=""><span>23</span>课程列表</a>
                            </h3>
                            <ul>                                                                        
                                <li><a href="#" target="_blank">版本控制器的简介</a></li>
                                <li><a href="">常用操作</a></li>
                            </ul>
                        </div>
                    </div> 
                    <div class="curriculum">
                        <h3>Photoshop常用操作        </h3>
                        <div class="title-list">
                            <h3>
                                <a href=""><span>24</span>课程列表</a>
                            </h3>
                            <ul>                                                                                    
                                <li><a href="#" target="_blank">常用工具的使用</a></li>
                                <li><a href="">项目案例 </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="curriculum">
                        <h3>ECMASCRIPT6  </h3>
                        <div class="title-list">
                            <h3>
                                <a href=""><span>25/span>课程列表</a>
                            </h3>
                            <ul>
                                <li><a href="#" target="_blank">简介</a></li>
                                <li><a href="">let和const命令</a></li>
                                <li><a href="">变量的解构赋值</a></li>
                                <li><a href="">字符串的扩展</a></li>
                                <li><a href="">正则的扩展</a></li>
                                <li><a href="">数值的扩展</a></li>
                                <li><a href="">数组的扩展</a></li>
                                <li><a href="">函数的扩展</a></li>
                                <li><a href="">对象的扩展</a></li>
                            </ul>
                        </div>
                    </div>
                     <div class="curriculum">
                        <h3>flex布局</h3>
                          <div class="title-list">
                              <h3>
                                  <a href=""><span>26</span>课程列表</a>
                              </h3>
                              <ul>
                                  <li><a href="#" target="_blank">概述</a></li>
                                  <li><a href="">语法</a></li>
                                  <li><a href="">实例</a></li>
                                  <li><a href="">项目案例</a></li>
                              </ul>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </div>

    <div class="back-top"></div>
</div>
</body>
</html>