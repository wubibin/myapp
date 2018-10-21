<?php
namespace app\api\common;
/**
 *
 */
class ErrorCode
{
  /** 正常 */
  const SUCCESS=200;

  /** 4**数据问题 */
  const ERROR_4_PARAMS_MISS=401;
  const ERROR_4_PARAMS_ERROR=402;

  /** 5**服务器问题 */
  const ERROR_5_TIME_OUT=504;

}
