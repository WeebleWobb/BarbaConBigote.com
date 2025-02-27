import { ReactNode } from 'react'
import { twMerge } from 'tailwind-merge'
import clsx from 'clsx'

type JustifyType = 'start' | 'end' | 'center' | 'around' | 'between'
type AlignType = 'top' | 'middle' | 'bottom'
type BreakpointType = 'xs' | 'sm' | 'md' | 'lg' | 'xl'

type RowProps = {
  children: ReactNode;
  className?: string;
  fullbasis?: boolean;
  nowrap?: boolean;
  reverse?: boolean;
  justifyXs?: JustifyType;
  justifySm?: JustifyType;
  justifyMd?: JustifyType;
  justifyLg?: JustifyType;
  justifyXl?: JustifyType;
  alignXs?: AlignType;
  alignSm?: AlignType;
  alignMd?: AlignType;
  alignLg?: AlignType;
  alignXl?: AlignType;
}

type JustifyMapType = Record<BreakpointType, Record<JustifyType, string>>
type AlignMapType = Record<BreakpointType, Record<AlignType, string>>

const justifyMap: JustifyMapType = {
  xs: {
    start: 'justify-start',
    end: 'justify-end',
    center: 'justify-center',
    around: 'justify-around',
    between: 'justify-between',
  },
  sm: {
    start: 'sm:justify-start',
    end: 'sm:justify-end',
    center: 'sm:justify-center',
    around: 'sm:justify-around',
    between: 'sm:justify-between',
  },
  md: {
    start: 'md:justify-start',
    end: 'md:justify-end',
    center: 'md:justify-center',
    around: 'md:justify-around',
    between: 'md:justify-between',
  },
  lg: {
    start: 'lg:justify-start',
    end: 'lg:justify-end',
    center: 'lg:justify-center',
    around: 'lg:justify-around',
    between: 'lg:justify-between',
  },
  xl: {
    start: 'xl:justify-start',
    end: 'xl:justify-end',
    center: 'xl:justify-center',
    around: 'xl:justify-around',
    between: 'xl:justify-between',
  },
}

const alignMap: AlignMapType = {
  xs: {
    top: 'items-start',
    bottom: 'items-end',
    middle: 'items-center',
  },
  sm: {
    top: 'sm:items-start',
    bottom: 'sm:items-end',
    middle: 'sm:items-center',
  },
  md: {
    top: 'md:items-start',
    bottom: 'md:items-end',
    middle: 'md:items-center',
  },
  lg: {
    top: 'lg:items-start',
    bottom: 'lg:items-end',
    middle: 'lg:items-center',
  },
  xl: {
    top: 'xl:items-start',
    bottom: 'xl:items-end',
    middle: 'xl:items-center',
  },
}

const Row = ({ 
  children,
  className,
  fullbasis = false,
  nowrap = false,
  reverse = false,
  justifyXs,
  justifySm,
  justifyMd,
  justifyLg,
  justifyXl,
  alignXs,
  alignSm,
  alignMd,
  alignLg,
  alignXl,
}: RowProps) => {
  const classes = twMerge(
    clsx(
      'box-border flex flex-shrink flex-grow-0',
      fullbasis ? 'basis-full' : 'basis-auto',
      reverse ? 'flex-row-reverse' : 'flex-row',
      nowrap ? 'flex-nowrap' : 'flex-wrap',
      justifyXs && justifyMap.xs[justifyXs],
      justifySm && justifyMap.sm[justifySm],
      justifyMd && justifyMap.md[justifyMd],
      justifyLg && justifyMap.lg[justifyLg],
      justifyXl && justifyMap.xl[justifyXl],
      alignXs && alignMap.xs[alignXs],
      alignSm && alignMap.sm[alignSm],
      alignMd && alignMap.md[alignMd],
      alignLg && alignMap.lg[alignLg],
      alignXl && alignMap.xl[alignXl]
    ),
    className
  )

  return (
    <div className={classes}>
      {children}
    </div>
  )
}

export default Row 