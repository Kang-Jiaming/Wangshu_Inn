import type { NextPage } from 'next'
import Head from 'next/head'
import Image from 'next/image'
import PaimonFAQ from '../assets/paimon_faq.png'
import Link from 'next/link'
import 'antd/dist/antd.css'
import 'tailwindcss/tailwind.css'
import { InputNumber, Select, Button } from 'antd';

const { Option } = Select;

function onChange(value) {
    console.log(`selected ${value}`);
}

function onSearch(val) {
    console.log('search:', val);
}

function onChangeCurrentLevel(value) {
    console.log('changed', value);
}
function onChangeFinalLevel(value) {
    console.log('changed', value);
}

const Home: NextPage = () => {
    const onChange = () => {};
    return (
        <main className="bg-gray-100 dark:bg-gray-800 rounded-2xl h-screen overflow-hidden relative">
            <div className="flex items-start justify-between">
                <div className="h-screen hidden lg:block my-4 ml-4 shadow-lg relative w-80">
                    <div className="bg-white h-full rounded-2xl dark:bg-gray-700">
                        <div className="flex items-center justify-center pt-6">
                            {/*<Image src={PaimonFAQ}  height={100} width={100} className="max-h-16" />*/}
                        </div>
                        <nav className="mt-6">
                            <div>
                                <a
                                    className="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                    href="/"
                                >
              <span className="text-left">
                <svg
                    width={20}
                    height={20}
                    fill="currentColor"
                    viewBox="0 0 2048 1792"
                    xmlns="http://www.w3.org/2000/svg"
                ></svg>
              </span>
                                    <span className="mx-4 text-sm font-normal">主页</span>
                                </a>
                                <a
                                    className="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                    href="/news"
                                >
              <span className="text-left">
                <svg
                    width={20}
                    height={20}
                    fill="currentColor"
                    className="m-auto"
                    viewBox="0 0 2048 1792"
                    xmlns="http://www.w3.org/2000/svg"
                ></svg>
              </span>
                                    <span className="mx-4 text-sm font-normal">资讯</span>
                                </a>
                                <a
                                    className="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                    href="/guides"
                                >
              <span className="text-left">
                <svg
                    width={20}
                    height={20}
                    fill="currentColor"
                    className="m-auto"
                    viewBox="0 0 2048 1792"
                    xmlns="http://www.w3.org/2000/svg"
                ></svg>
              </span>
                                    <span className="mx-4 text-sm font-normal">攻略</span>
                                </a>
                                <a
                                    className="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                    href="/calc"
                                >
              <span className="text-left">
                <svg
                    width={20}
                    height={20}
                    fill="currentColor"
                    className="m-auto"
                    viewBox="0 0 2048 1792"
                    xmlns="http://www.w3.org/2000/svg"
                ></svg>
              </span>
                                    <span className="mx-4 text-sm font-normal">计算器</span>
                                </a>
                                <a
                                    className="w-full font-thin uppercase text-blue-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-blue-100 border-r-4 border-blue-500 dark:from-gray-700 dark:to-gray-800 border-r-4 border-blue-500"
                                    href="/bag"
                                >
              <span className="text-left">
                <svg
                    width={20}
                    height={20}
                    className="m-auto"
                    fill="currentColor"
                    viewBox="0 0 2048 1792"
                    xmlns="http://www.w3.org/2000/svg"
                ></svg>
              </span>
                                    <span className="mx-4 text-sm font-normal">背包</span>
                                </a>
                                <a
                                    className="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                    href="/planner"
                                >
              <span className="text-left">
                <svg
                    width={20}
                    height={20}
                    fill="currentColor"
                    className="m-auto"
                    viewBox="0 0 2048 1792"
                    xmlns="http://www.w3.org/2000/svg"
                ></svg>
              </span>
                                    <span className="mx-4 text-sm font-normal">规划</span>
                                </a>
                                <a
                                    className="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                    href="/comment"
                                >
              <span className="text-left">
                <svg
                    width={20}
                    fill="currentColor"
                    height={20}
                    className="h-5 w-5"
                    viewBox="0 0 1792 1792"
                    xmlns="http://www.w3.org/2000/svg"
                ></svg>
              </span>
                                    <span className="mx-4 text-sm font-normal">讨论版</span>
                                </a>
                                <a
                                    className="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                    href="/abyss"
                                >
              <span className="text-left">
                <svg
                    width={20}
                    fill="currentColor"
                    height={20}
                    className="h-5 w-5"
                    viewBox="0 0 1792 1792"
                    xmlns="http://www.w3.org/2000/svg"
                ></svg>
              </span>
                                    <span className="mx-4 text-sm font-normal">排行榜</span>
                                </a>
                                <a
                                    className="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                    href="/userPanel"
                                >
              <span className="text-left">
                <svg
                    width={20}
                    fill="currentColor"
                    height={20}
                    className="h-5 w-5"
                    viewBox="0 0 1792 1792"
                    xmlns="http://www.w3.org/2000/svg"
                ></svg>
              </span>
                                    <span className="mx-4 text-sm font-normal">用户中心</span>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
                <div className="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
                    <header className="w-full shadow-lg bg-white dark:bg-gray-700 items-center h-16 rounded-2xl z-40">
                        <div className="relative z-20 flex flex-col justify-center h-full px-3 mx-auto flex-center">
                            <div className="relative items-center pl-1 flex w-full lg:max-w-68 sm:pr-2 sm:ml-0">
                                <div className="container relative left-0 z-50 flex w-3/4 h-auto h-full">
                                    <div className="relative flex items-center w-full lg:w-64 h-full group">
                                        <div className="absolute z-50 flex items-center justify-center block w-auto h-10 p-3 pr-2 text-sm text-gray-500 uppercase cursor-pointer sm:hidden">
                                            {/*                  绘制搜索框搜索图标*/}
                                            <svg
                                                fill="none"
                                                className="relative w-5 h-5"
                                                strokeLinecap="round"
                                                strokeLinejoin="round"
                                                strokeWidth={2}
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                        <svg
                                            className="absolute left-0 z-20 hidden w-4 h-4 ml-4 text-gray-500 pointer-events-none fill-current group-hover:text-gray-400 sm:block"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                        >
                                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                                        </svg>
                                        <input
                                            type="text"
                                            className="block w-full py-1.5 pl-10 pr-4 leading-normal rounded-2xl focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 ring-opacity-90 bg-gray-100 dark:bg-gray-800 text-gray-400 aa-input"
                                            placeholder="搜索"
                                        />
                                        <div className="absolute right-0 hidden h-auto px-2 py-1 mr-2 text-xs text-gray-400 border border-gray-300 rounded-2xl md:block">
                                            +
                                        </div>
                                    </div>
                                </div>
                                <div className="relative p-1 flex items-center justify-end w-1/4 ml-5 mr-4 sm:mr-0 sm:right-auto">
                                    <a href="#" className="block relative">
                                        <img
                                            alt="profil"
                                            src="./img/kazuha_pf.jpg"
                                            className="mx-auto object-cover rounded-full h-10 w-10 "
                                        />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div className='inline-block p-8 w-full bg-white'>
                        <p className='text-4xl'>角色计算器</p>
                        <div className='w-4 h-full'>
                        <Select
                            showSearch
                            placeholder="选择角色"
                            optionFilterProp="children"
                            onChange={onChange}
                            onSearch={onSearch}
                            filterOption={(input, option) =>
                                option.children.toLowerCase().indexOf(input.toLowerCase()) >= 0
                            }
                        >
                            <option value="albedo">
                                阿贝多
                            </option>
                            <option value="aloy">
                                埃洛伊
                            </option>
                            <option value="arataki_itto">
                                荒泷一斗
                            </option>
                            <option value="babara">
                                芭芭拉
                            </option>
                            <option value="beidou">
                                北斗
                            </option>
                            <option value="bennett">
                                班尼特
                            </option>
                            <option value="chongyun">
                                重云
                            </option>
                            <option value="diluc">
                                迪卢克
                            </option>
                            <option value="diona">
                                迪奥娜
                            </option>
                            <option value="eula">
                                优菈
                            </option>
                            <option value="fischl">
                                菲谢尔
                            </option>
                        </Select>

                        </div>
                        <div className='text-2xl '>当前等级
                            <InputNumber min={1} max={90} defaultValue={1} onChangeCurentLevel={onChange} />
                        </div>
                        <div className='text-2xl '>目标等级
                            <InputNumber min={1} max={90} defaultValue={1} onChangeFinalLevel={onChange} />
                        </div>
                        <Button type="primary">计算</Button>
                        <p className='text-4xl'>武器计算器</p>
                        <div className='w-4 h-full'>
                        <Select
                            showSearch
                            placeholder="选择武器"
                            optionFilterProp="children"
                            onChange={onChange}
                            onSearch={onSearch}
                            filterOption={(input, option) =>
                                option.children.toLowerCase().indexOf(input.toLowerCase()) >= 0
                            }
                        >
                            <option value="">

                            </option>

                        </Select>

                        </div>
                        <div className='text-2xl '>当前等级
                            <InputNumber min={1} max={90} defaultValue={1} onChangeCurentLevel={onChange} />
                        </div>
                        <div className='text-2xl '>目标等级
                            <InputNumber min={1} max={90} defaultValue={1} onChangeFinalLevel={onChange} />
                        </div>
                        <Button type="primary">计算</Button>

                    </div>
                </div>
            </div>
        </main>
    )
}


export default Home
