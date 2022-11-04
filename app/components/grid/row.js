import PropTypes from 'prop-types';
import clsx from 'clsx';
import { twMerge } from 'tailwind-merge'

const justifyMap = {
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
};

const alignMap = {
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
};

const Row = ({ 
  reverse,
  nowrap,
  children,
  className,
  fullbasis,
  gutter,
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
 }) => {
  const classes = twMerge(
    clsx(
        'box-border flex flex-shrink flex-grow-0',
        fullbasis ? 'basis-full' : 'basis-auto',
        reverse ? 'flex-row-reverse' : 'flex-row',
        nowrap ? 'flex-nowrap' : 'flex-wrap',
        gutter === 'double' && '-ml-4 -mr-4',
        gutter !== false &&
            gutter !== 'none' &&
            gutter !== 'double' &&
            '-mr-2 -ml-2',
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
  );

  return (
    <>
      <div className={classes}>
        {children}
      </div>
    </>
  )
}

Row.propTypes = {
  /**
  * Additional CSS classes that can be passed via consumer.
  * Any Tailwind classes will be merged with and override the default classes.
  */
  className: PropTypes.string,
     
  /**
   * When `true`, row basis is set to full
   */
  fullbasis: PropTypes.bool,

  /**
   * When `true`, row items will not wrap
   */
  nowrap: PropTypes.bool,

  /**
   * When `true`, flex-direction will be reversed
   */
  reverse: PropTypes.bool,

  /**
   * Change the width between gutters of columns
   */
  gutter: PropTypes.oneOf(['none', 'double']),

  /**
   * Set the align-items property for the XS breakpoint
   */
  alignXs: PropTypes.oneOf(['top', 'middle', 'bottom']),

  /**
   * Set the align-items property for the SM breakpoint
   */
  alignSm: PropTypes.oneOf(['top', 'middle', 'bottom']),

  /**
   * Set the align-items property for the MD breakpoint
   */
  alignMd: PropTypes.oneOf(['top', 'middle', 'bottom']),

  /**
   * Set the align-items property for the LG breakpoint
   */
  alignLg: PropTypes.oneOf(['top', 'middle', 'bottom']),

  /**
   * Set the align-items property for the XL breakpoint
   */
  alignXl: PropTypes.oneOf(['top', 'middle', 'bottom']),

  /**
   * Set the justify-content property for the XS breakpoint
   */
  justifyXs: PropTypes.oneOf(['start', 'end', 'center', 'around', 'between']),

  /**
   * Set the justify-content property for the SM breakpoint
   */
  justifySm: PropTypes.oneOf(['start', 'end', 'center', 'around', 'between']),

  /**
   * Set the justify-content property for the MD breakpoint
   */
  justifyMd: PropTypes.oneOf(['start', 'end', 'center', 'around', 'between']),

  /**
   * Set the justify-content property for the LG breakpoint
   */
  justifyLg: PropTypes.oneOf(['start', 'end', 'center', 'around', 'between']),

  /**
   * Set the justify-content property for the XL breakpoint
   */
  justifyXl: PropTypes.oneOf(['start', 'end', 'center', 'around', 'between']),
};

export default Row;